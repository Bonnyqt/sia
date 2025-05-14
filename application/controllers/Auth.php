<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url']);
        $this->load->library('session');
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

        // Check for duplicate email
        $existingUser = $this->UserModel->getUserByEmail($email);
        if ($existingUser) {
            $this->session->set_flashdata('error', 'Email is already registered.');
            redirect('auth/signup');
        }


        // Generate API key
        $apiKey = bin2hex(random_bytes(32));

        // Save user
        $data = [
            'username'     => $username,
            'email'        => $email,
            'password'     => password_hash($password, PASSWORD_DEFAULT),
            'api_key'      => $apiKey,
            'first_login'  => 1
        ];
        $this->UserModel->insertUser($data);

        // Fetch the saved user
        $user = $this->UserModel->getUserByEmail($email);

        // Set session
        $this->session->set_userdata([
            'user_id'     => $user['id'],
            'username'    => $user['username'],
            'email'       => $user['email'],
            'first_login' => $user['first_login'],
            'api_key'     => $user['api_key']
        ]);

        redirect('/');
    }

    public function login()
    {
        $this->load->view('login');
    }

    
    
    public function doLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $user = $this->UserModel->getUserByUsername($username);
    
        if ($user && password_verify($password, $user['password'])) {
            $this->session->set_userdata([
                'user_id'     => $user['id'],
                'username'    => $user['username'],
                'email'       => $user['email'],
                'first_login' => $user['first_login'],
                'api_key'     => $user['api_key'],
                'is_superuser' => $user['is_superuser']
            ]);
    
            // Redirect superusers to the admin page
            if ($user['is_superuser'] == 1) {
               redirect('admin/admin_dashboard');
            }
    
            // Redirect regular users to the landing page
            redirect('/');
        }
    
        $this->session->set_flashdata('error', 'Invalid credentials.');
        redirect('auth/login');
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
        $this->session->sess_destroy();
        redirect('/');
    }

}
