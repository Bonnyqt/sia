<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
public function __construct()
    {
        parent::__construct();
    
        $this->load->model('UserModel');
        $this->load->model('LogModel');
$this->load->model('BlogModel');
        
    }
public function admin_dashboard()
{
    // Optional: restrict access to superusers
    if (!$this->session->userdata('is_superuser')) {
        show_error('Unauthorized access', 403);
    }

    // Load models
    $this->load->model('UserModel');
    $this->load->model('BlogModel');
$this->load->model('LogModel');
$data['recent_logs'] = $this->LogModel->getRecentLogs(3); // limit to 5

    // Collect data
    $data['user_count'] = $this->UserModel->countUsers();
    $data['blog_count'] = $this->BlogModel->countBlogs();
    $data['blogs'] = $this->BlogModel->get_all_blogs();
    
    $data['page_title'] = 'Dashboard';

    // Load view with all data
    $this->load->view('admin/admin_dashboard', $data);
}

  public function admin_blogs()
    {
       
      
        if (!$this->session->userdata('is_superuser')) {
            show_error('Unauthorized access', 403);
        }
       $data['blogs'] = $this->BlogModel->get_all_blogs(); 
        $data['page_title'] = 'Blogs';
        $this->load->view('admin/admin_blogs', $data);
    }

public function admin_logs()
{
    if (!$this->session->userdata('is_superuser')) {
        show_error('Unauthorized access', 403);
    }

    $this->load->library('pagination');
    $this->load->model('LogModel');

    // Pagination config
    $config['base_url'] = base_url('index.php/admin/admin_logs');
    $config['total_rows'] = $this->LogModel->count_all_logs();
    $config['per_page'] = 20;
    $config['uri_segment'] = 3;

    // Bootstrap 4/5 style pagination (optional)
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close'] = '</span></li>';
    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close'] = '</span></li>';
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['prev_tag_close'] = '</span></li>';
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['next_tag_close'] = '</span></li>';

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['logs'] = $this->LogModel->get_logs_paginated($config['per_page'], $page);
    $data['pagination_links'] = $this->pagination->create_links();
    $data['page_title'] = 'Logs';

    $this->load->view('admin/admin_logs', $data);
}

     public function admin_users()
    {
        
        if (!$this->session->userdata('is_superuser')) {
            show_error('Unauthorized access', 403);
        }
        $data['users'] = $this->UserModel->get_all_users();
        $data['page_title'] = 'Users';
        $this->load->view('admin/admin_users', $data);
    }
public function update()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if ($input && isset($input['user_id']) && isset($input['data'])) {
        $userId = $input['user_id'];
        $updatedData = $input['data'];

        $data = [
            'username' => $updatedData['username'],
            'email' => $updatedData['email'],
            'password' => $updatedData['password'],
            'first_login' => $updatedData['first_login'],
            'is_superuser' => $updatedData['is_superuser']
        ];

        $this->db->where('id', $userId);
        $this->db->update('users', $data);

        // Log the update
        $adminId = $this->session->userdata('user_id');
        $adminUsername = $this->session->userdata('username');
        $this->LogModel->log_action($adminId, $adminUsername, "Updated user ID $userId ({$data['username']})");

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}

public function update_blog()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if ($input && isset($input['blog_id']) && isset($input['data'])) {
        $blogId = $input['blog_id'];
        $updatedData = $input['data'];

        $data = [
            'title' => $updatedData['title'],
            'content' => $updatedData['content'],
            'category' => $updatedData['category'],
            'isAnonymous' => $updatedData['isAnonymous']
        ];

        $this->db->where('id', $blogId);
        $this->db->update('blog_posts', $data);

        // Log the blog update
        $userId = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $this->LogModel->log_action($userId, $username, "Updated blog post ID $blogId titled '{$data['title']}'");

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}


public function delete_blog()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if ($input && isset($input['blog_id'])) {
        $blogId = $input['blog_id'];

        // Get blog title for logging before deletion
        $query = $this->db->get_where('blog_posts', ['id' => $blogId]);
        $blog = $query->row_array();
        $title = $blog ? $blog['title'] : 'Unknown Title';

        $this->db->where('id', $blogId);
        $this->db->delete('blog_posts');

        // Log the deletion
        $userId = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $this->LogModel->log_action($userId, $username, "Deleted blog post ID $blogId titled '{$title}'");

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}

}
