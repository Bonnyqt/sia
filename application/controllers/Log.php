<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Log extends CI_Controller {
    public function show_api() {
        $input = json_decode(file_get_contents('php://input'), true);
        if ($this->session->userdata('user_id')) {
            $this->load->model('LogModel');
            $user_id = $this->session->userdata('user_id');
            $username = $this->session->userdata('username');
            $action = isset($input['action']) ? $input['action'] : 'Showed API Key';
            $this->LogModel->log_action($user_id, $username, $action);
        }
        echo json_encode(['status' => 'logged']);
    }
}