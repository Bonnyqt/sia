<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    private $dataFile;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url']);
        $this->load->model(['BlogModel', 'UserModel','LogModel']);
        $this->dataFile = APPPATH . '../writable/blog_posts.json'; // Adjusted path
        $this->load->library('session');
        
    }

    public function index()
    {
        $data['session_data'] = $this->session->userdata();
        $this->load->view('blog_home', $data);
    }



 public function about()
    {
        $this->load->view('blog_about');
    }

    public function myposts()
    {
        $userId = $this->session->userdata('user_id');
        $data['posts'] = $this->BlogModel->get_user_posts($userId);
        $this->load->view('blog_myPosts', $data);
    }

    public function save()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('/login');
        }

        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $category = $this->input->post('category');
        $isAnonymous = $this->input->post('isAnonymous') ? 1 : 0;

        if (!$title || !$content) {
            $this->session->set_flashdata('error', 'Title and Content are required.');
            redirect('blog');
        }

        $mediaPath = null;
        if (!empty($_FILES['media']['name'])) {
            $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'jpg|jpeg|png|gif|mp4|webm|ogg|mov';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('media')) {
                $mediaPath = 'sia/uploads/' . $this->upload->data('file_name');
            }
        }

        $userId = $this->session->userdata('user_id');
        $user = $this->UserModel->get_user($userId);
        $username = $isAnonymous ? 'Anonymous' : ($user['username'] ?? 'Unknown');
        
        $postData = [
            'title' => $title,
            'content' => $content,
            'user_id' => $userId,
            'username' => $username,
            'media' => $mediaPath,
            'category' => $category,
            'isAnonymous' => $isAnonymous
        ];

        if (!$this->BlogModel->insert_post($postData)) {
            $this->session->set_flashdata('error', 'Failed to save blog post.');
            redirect('blog');
        }

        // Append to JSON file
        $postData['created_at'] = date('Y-m-d H:i:s');
        $postData['id'] = $this->db->insert_id();
        $this->LogModel->log_action($userId, $username, "Created a new blog post titled '{$title}'");
        $posts = file_exists($this->dataFile) ? json_decode(file_get_contents($this->dataFile), true) : [];
        $posts[] = $postData;
        file_put_contents($this->dataFile, json_encode($posts, JSON_PRETTY_PRINT));

        redirect('blog/list');
    }

    public function list()
    {
        $data['posts'] = $this->BlogModel->get_all();
        $this->load->view('blog_list', $data);
    }

    public function api()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");

        $apiKey = $this->input->get('api_key');
        $username = $this->input->get('username');

        if (!$this->_check_api_key($apiKey)) {
            http_response_code(403);
            echo json_encode(['error' => 'Invalid API key']);
            return;
        }

        $posts = $username
            ? $this->BlogModel->get_by_username($username)
            : $this->BlogModel->get_all();

        echo json_encode($posts);
    }

   private function _check_api_key($apiKey)
{
    $user = $this->UserModel->get_by_api_key($apiKey);
    if (!$user) return false;
    $this->session->set_userdata('user_id', $user['id']);
    return true;
}

public function getPost($id)
{
    // Load the BlogModel
    $this->load->model('BlogModel');

    // Fetch the post by ID
    $post = $this->BlogModel->get_post($id);

    // Check if the post exists
    if (!$post) {
        http_response_code(404);
        echo json_encode(['error' => 'Post not found']);
        return;
    }

    // Return the post as JSON
    header('Content-Type: application/json');
    echo json_encode($post);
}
    public function update($id)
    {
        $post = $this->BlogModel->get_post($id);

        if (!$post) {
            $this->session->set_flashdata('error', 'Post not found.');
            redirect('blog/myposts');
        }

        if ($post['user_id'] != $this->session->userdata('user_id')) {
            $this->session->set_flashdata('error', 'Unauthorized access.');
            redirect('blog/myposts');
        }

        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $category = $this->input->post('category');
        $isAnonymous = $this->input->post('isAnonymous') ? 1 : 0;

        if (!$title || !$content) {
            $this->session->set_flashdata('error', 'Title and Content are required.');
            redirect("blog/edit/$id");
        }

        // Handle media upload
        if (!empty($_FILES['media']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('media')) {
                $post['media'] = 'sia/uploads/' . $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', 'Failed to upload the image.');
                redirect("blog/edit/$id");
            }
        }

        $user = $this->UserModel->get_user($this->session->userdata('user_id'));
        $username = $isAnonymous ? 'Anonymous' : ($user['username'] ?? 'Unknown');

        $post['title'] = $title;
        $post['content'] = $content;
        $post['category'] = $category;
        $post['isAnonymous'] = $isAnonymous;
        $post['username'] = $username;

        if ($this->BlogModel->update_post($id, $post)) {
            $this->LogModel->log_action($userId, $username, "Updated blog post titled '{$title}'");
            $this->session->set_flashdata('success', 'Post updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update the post.');
        }

        redirect('blog/myposts');
    }

    public function delete($id)
    {
        $post = $this->BlogModel->get_post($id);

        if (!$post) {
            $this->session->set_flashdata('error', 'Post not found.');
            redirect('blog/myposts');
        }

        if ($post['user_id'] != $this->session->userdata('user_id')) {
            $this->session->set_flashdata('error', 'Unauthorized access.');
            redirect('blog/myposts');
        }
        $title = $post['title'];
        if ($this->BlogModel->delete_post($id, $post)) {
            $this->LogModel->log_action($userId, $username, "Deleted a blog post titled: '{$title}'");
            $this->session->set_flashdata('success', 'Post deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete the post.');
        }

        redirect('blog/myposts');
    }

    public function like($id)
    {
        $post = $this->BlogModel->get_post($id);

        if (!$post) {
            echo json_encode(['error' => 'Post not found']);
            return;
        }

        $likes = isset($post['likes']) ? $post['likes'] + 1 : 1;
        $post['likes'] = $likes;

        if ($this->BlogModel->update_post($id, $post)) {
            echo json_encode(['success' => true, 'likes' => $likes]);
        } else {
            echo json_encode(['error' => 'Failed to like the post']);
        }
    }

    public function comment($id)
    {
        $commentText = $this->input->post('comment');

        if (!$commentText) {
            echo json_encode(['error' => 'Comment cannot be empty']);
            return;
        }

        $post = $this->BlogModel->get_post($id);
        if (!$post) {
            echo json_encode(['error' => 'Post not found']);
            return;
        }

        $comment = [
            'user_id' => $this->session->userdata('user_id'),
            'comment' => $commentText,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $comments = isset($post['comments']) ? json_decode($post['comments'], true) : [];
        $comments[] = $comment;
        $post['comments'] = json_encode($comments);

        if ($this->BlogModel->update_post($id, $post)) {
            echo json_encode(['success' => true, 'comments' => $comments]);
        } else {
            echo json_encode(['error' => 'Failed to add comment']);
        }
    }
    
    public function search()
    {
        $query = $this->input->get('query'); // Get the search query from the URL
        $data['query'] = $query;
    
        if (!empty($query)) {
            $data['posts'] = $this->BlogModel->search_posts($query); // Call the model to search posts
        } else {
            $data['posts'] = [];
        }
    
        $this->load->view('blog_list', $data); // Load the blog_list view with the search results
    }
}
