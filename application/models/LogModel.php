<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LogModel extends CI_Model
{
    public function log_action($user_id, $username, $action)
    {
        $data = [
            'user_id' => $user_id,
            'username' => $username,
            'action' => $action
        ];
        $this->db->insert('logs', $data);
    }
    public function get_all_logs()
    {
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('logs'); 
        return $query->result();
    }
}