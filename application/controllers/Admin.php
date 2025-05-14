<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function admin_dashboard()
    {
        // Optional: restrict access to superusers
        if (!$this->session->userdata('is_superuser')) {
            show_error('Unauthorized access', 403);
        }

        // Load the blog_admin view
        $this->load->view('admin/admin_dashboard');
    }
     public function admin_logs()
    {
        // Optional: restrict access to superusers
        if (!$this->session->userdata('is_superuser')) {
            show_error('Unauthorized access', 403);
        }

        // Load the blog_admin view
        $this->load->view('admin/admin_logs');
    }
     public function admin_users()
    {
        // Optional: restrict access to superusers
        if (!$this->session->userdata('is_superuser')) {
            show_error('Unauthorized access', 403);
        }

        // Load the blog_admin view
        $this->load->view('admin/admin_users');
    }
}
