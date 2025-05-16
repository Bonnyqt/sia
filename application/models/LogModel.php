<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LogModel extends CI_Model
{
    public function log_action($user_id, $username, $action)
{
    $data = [
        'user_id' => $user_id > 0 ? $user_id : null,  // Use NULL if user_id is invalid
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
    public function getRecentLogs($limit = 3)
{
    return $this->db
                ->order_by('created_at', 'DESC')
                ->limit($limit)
                ->get('logs') // Replace with your actual logs table name
                ->result();
}
public function count_all_logs()
{
    return $this->db->count_all('logs'); // Replace 'logs' with your table name
}

public function get_logs_paginated($limit, $start)
{
    return $this->db
                ->order_by('created_at', 'DESC')
                ->limit($limit, $start)
                ->get('logs')
                ->result();
}

}