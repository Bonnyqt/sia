<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    private $table = 'users';

public function insertUser($data)
{
    return $this->db->insert('users', $data); // 'users' is the name of your database table
}

public function get_by_api_key($apiKey)
{
    $this->db->where('api_key', $apiKey);
    return $this->db->get('users')->row_array(); 
}


public function get_user($userId)
{
    $this->db->where('id', $userId); // Assuming 'id' is the primary key for the users table
    $query = $this->db->get($this->table); // $this->table refers to the 'users' table
    return $query->row_array(); // Return a single row as an associative array
}
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Generate an API key and update the user record
    public function generateApiKey($userId)
    {
        $apiKey = bin2hex(random_bytes(32));
        $this->db->where('id', $userId);
        $this->db->update($this->table, ['api_key' => $apiKey]);

        return $apiKey;
    }

    // Get user by email
    public function getUserByEmail($email)
    {
        return $this->db->get_where($this->table, ['email' => $email])->row_array();
    }

    // Get user by username
    public function getUserByUsername($username)
    {
        return $this->db->get_where($this->table, ['username' => $username])->row_array();
    }

    // Get user by API key
    public function getUserByApiKey($apiKey)
    {
        return $this->db->get_where($this->table, ['api_key' => $apiKey])->row_array();
    }

    // Create new user
    public function createUser($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update user by ID
    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
}
