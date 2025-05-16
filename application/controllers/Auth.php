<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url']);
        $this->load->library('session');
          $this->load->model(['BlogModel', 'UserModel','LogModel']);
        $this->load->model('UserModel');
    }

public function verifyPassword()
{
    // Get the password from the request
    $input = json_decode(file_get_contents('php://input'), true);
    $password = $input['password'];

    // Get the current user's password hash from the database
    $user = $this->UserModel->get_user($this->session->userdata('user_id'));

    if (password_verify($password, $user['password'])) {
        // Password is correct
        echo json_encode(['success' => true]);
    } else {
        // Password is incorrect
        echo json_encode(['success' => false]);
    }
}
    public function signup()
    {
        $this->load->view('signup');
    }

    public function register()
    {
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        if (!$username || !$email || !$password) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect('auth/signup');
        }

        $existingUser = $this->UserModel->getUserByEmail($email);
        if ($existingUser) {
            $this->session->set_flashdata('error', 'Email is already registered.');
            redirect('auth/signup');
        }
        $apiKey = bin2hex(random_bytes(32));
        $data = [
            'username'     => $username,
            'email'        => $email,
            'password'     => password_hash($password, PASSWORD_DEFAULT),
            'api_key'      => $apiKey,
            'first_login'  => 1
        ];
        $this->UserModel->insertUser($data);
        $user = $this->UserModel->getUserByEmail($email);
        $this->session->set_userdata([
            'user_id'     => $user['id'],
            'username'    => $user['username'],
            'email'       => $user['email'],
            'first_login' => $user['first_login'],
            'api_key'     => $user['api_key']
        ]);

        redirect('/');
    }

   

    
    
  public function doLogin()
{
    $usernameInput = $this->input->post('username');
    $passwordInput = $this->input->post('password');

    // Attempt to fetch the user by username
    $user = $this->UserModel->getUserByUsername($usernameInput);

    // If user exists and password matches → SUCCESS
    if ($user && password_verify($passwordInput, $user['password'])) {
        // Set session data
        $this->session->set_userdata([
            'user_id'      => $user['id'],
            'username'     => $user['username'],
            'email'        => $user['email'],
            'first_login'  => $user['first_login'],
            'api_key'      => $user['api_key'],
            'is_superuser' => $user['is_superuser']
        ]);

        // Log the successful login
        $this->LogModel->log_action(
            $user['id'],
            $user['username'],
            "User logged in successfully."
        );

        // Redirect superusers to the admin dashboard
        if ($user['is_superuser'] == 1) {
            redirect('admin/admin_dashboard');
        }

        // Redirect regular users to the homepage
        redirect('/');
    }

    // If we reach here, login failed
    // We don't have a valid user ID, but we can still log the attempt
    $userIdToLog   = $user['id'] ?? 0;
    $usernameToLog = $usernameInput ?: 'Unknown';

    $this->LogModel->log_action(
        $userIdToLog,
        $usernameToLog,
        "Failed login attempt for username '{$usernameToLog}'."
    );

    $this->session->set_flashdata('error', 'Invalid credentials.');
    redirect('/');
}


    public function markFirstLoginDone()
    {
        if ($this->input->is_ajax_request()) {
            log_message('debug', 'AJAX request received to mark first login as done.');

            $userId = $this->session->userdata('user_id');
            $this->UserModel->updateUser($userId, ['first_login' => 0]);

            $this->session->set_userdata('first_login', 0);

            echo json_encode(['status' => 'success']);
            return;
        }

        show_error('Forbidden', 403);
    }

    public function logout()
{
    $userId = $this->session->userdata('user_id');
    $username = $this->session->userdata('username');

    if ($userId && $username) {
        $this->LogModel->log_action($userId, $username, "User logged out.");
    }

    $this->session->sess_destroy();
    redirect('/');
}


}
