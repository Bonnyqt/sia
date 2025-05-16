<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model
{
    protected $table = 'blog_posts';

    public function __construct()
    {
        parent::__construct();
    }

    // Search posts by keyword
       
    public function search_posts($query)
    {
        $this->db->like('title', $query);
        $this->db->or_like('content', $query);
        $this->db->or_like('username', $query);
        $this->db->or_like('category', $query);
        $this->db->order_by('created_at', 'DESC'); 
        $query = $this->db->get($this->table);
        return $query->result_array(); // Return results as an array
    }
public function countBlogs()
{
    return $this->db->count_all('blog_posts'); // replace 'users' with your actual table name
}

    public function get_all($user_id = null)
    {
        if ($user_id) {
            $this->db->where('user_id', $user_id);
        }
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get($this->table);
        return $query->result_array(); 
    }

public function get_by_username($username)
{
    $this->db->where('username', $username);
    return $this->db->get('blog_posts')->result_array();
}
    public function get_post($id)
{
    $this->db->where('id', $id);
    return $this->db->get('blog_posts')->row_array(); 
}
    // Insert a new post
    public function insert_post($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update a post
    public function update_post($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete a post
    public function delete_post($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

   
    public function increment_likes($id)
    {
        $this->db->set('likes', 'likes + 1', FALSE);
        $this->db->where('id', $id);
        return $this->db->update($this->table);
    }


    public function update_comments($id, $comments_array)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, ['comments' => json_encode($comments_array)]);
    }
public function get_user_posts($userId)
{
    $this->db->where('user_id', $userId);
    $this->db->order_by('created_at', 'DESC'); // Newest first
    $query = $this->db->get($this->table); 
    return $query->result_array();
}
public function get_all_blogs()
    {   
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('blog_posts'); 
        return $query->result();
    }
}
