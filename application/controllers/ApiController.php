<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ApiController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BlogModel');
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    // Function to check the API key
    private function checkApiKey($apiKey)
    {
        $user = $this->UserModel->getUserByApiKey($apiKey);

        if (!$user) {
            return false; // API key is invalid
        }

        // Optionally store user session data
        $this->session->set_userdata('user_id', $user['id']);
        return true;
    }

    // Fetch blog posts using API key
    public function getData()
    {
        $apiKey = $this->input->get_request_header('X-API-KEY');

        if (!$apiKey || !$this->checkApiKey($apiKey)) {
            return $this->output
                ->set_status_header(401)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Invalid API key']));
        }

        $posts = $this->BlogModel->getAllPosts(); // Implement this in your model

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($posts));
    }

    // Store blog post data
    public function storeData()
    {
        $apiKey = $this->input->get_request_header('X-API-KEY');

        if (!$apiKey || !$this->checkApiKey($apiKey)) {
            return $this->output
                ->set_status_header(401)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Invalid API key']));
        }

        $title   = $this->input->post('title');
        $content = $this->input->post('content');

        if (!$title || !$content) {
            return $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Title and content required']));
        }

        $data = [
            'title'   => $title,
            'content' => $content,
            'user_id' => $this->session->userdata('user_id')
        ];

        $this->BlogModel->insertPost($data); // Implement this method in your model

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['success' => 'Data stored successfully']));
    }
}
