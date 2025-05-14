<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="/sia/uploads/test.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   <title>LV | My Stories</title>
</head>
<style>
   
   .featured-post {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  background-color: #1e293b;
  border-radius: 12px;
  padding: 24px;
  align-items: center;
  position: relative; /* Ensure positioning context for the badge */
}

.badge {
  position: absolute;
  top: 15px; /* Adjust position from top */
  right: 15px; /* Move the badge to the right */
  background: #e91e63;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 0.8em;
  font-weight: bold;
  z-index: 10; /* Make sure the badge stays on top of content */
}


.featured-post .featured-img {
  width: 100%;
  max-width: 550px;
  border-radius: 12px;
  object-fit: cover;
  flex: 1 1 50%;
}

.featured-post .content {
  flex: 1 1 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.featured-post .meta {
  font-size: 14px;
  color: #94a3b8;
  margin-bottom: 12px;
}

.featured-post h2 {
  font-size: 24px;
  color: #f8fafc;
  margin-bottom: 12px;
}

.featured-post p {
  font-size: 16px;
  color: #cbd5e1;
  margin-bottom: 16px;
}

.featured-post .author {
  display: flex;
  align-items: center;
  gap: 10px;
}

.featured-post .author img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
}


.meta {
  font-size: 12px;
  color: #94a3b8;
  margin-bottom: 6px;
}

h2, h5 {
  color: #f8fafc;
}

.author {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-top: 10px;
}

.blog-container {
  max-width: 1300px;
  margin: 0 auto;
  padding: 0 12px;
}


.sub-posts-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
}

.sub-post {
  background-color: #1e293b;
  padding: 16px;
  border-radius: 12px;
}

.sub-post img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 10px;
}




.author img {
  width: 28px;
  height: 28px;
  border-radius: 50%;
}
.search-input::placeholder {
    color: white;
    opacity: 1;
  }
  /* Sticky Button */
  .post-actions {
  margin-top: 12px;
  display: flex;
  gap: 10px;
}

.post-actions button {
  padding: 6px 12px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 14px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.update-btn {
  background-color: #3b82f6; /* blue */
  color: white;
}

.update-btn:hover {
  background-color: #2563eb;
}

.delete-btn {
  background-color: #ef4444; /* red */
  color: white;
}

.delete-btn:hover {
  background-color: #dc2626;
}

</style>
<body>
  
<?php $this->load->view('partials/header'); ?>
<br>
<h1 style="color:white; font-family:myFirstFont; font-size:90px;">My Posts</h1>
<br>
<?php if ($this->session->userdata('api_key')): ?>
<div class="blog-container">
  <?php if (!empty($posts)): ?>

    <!-- Display search term above the posts -->
    <?php if (isset($query) && !empty($query)): ?>
      <div class="search-results-header" style="margin-bottom: 20px;">
        <h3>Showing results for: <strong><?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?></strong></h3>
      </div>
    <?php endif; ?>

    <!-- Featured Post -->
    <div class="featured-post mb-4">
    <span class="badge">Newest</span> 
            <?php if (!empty($posts[0]['media'])): ?>
          <?php if (preg_match('/\.(jpg|jpeg|png|gif|jfif)$/i', $posts[0]['media'])): ?>
              <img src="/<?= htmlspecialchars($posts[0]['media'], ENT_QUOTES, 'UTF-8') ?>"class="featured-img" alt="Image">
          <?php elseif (preg_match('/\.(mp4|webm|ogg)$/i', $posts[0]['media'])): ?>
              <video controls class="featured-img">
                  <source src="/<?= htmlspecialchars($posts[0]['media'], ENT_QUOTES, 'UTF-8') ?>">
                  Your browser does not support the video tag.
              </video>
          <?php endif; ?>
      <?php endif; ?>
      
      <div class="content">
          <div class="meta"><?= htmlspecialchars($posts[0]['category'] ?? 'Category', ENT_QUOTES, 'UTF-8') ?> • <?= htmlspecialchars($posts[0]['created_at'], ENT_QUOTES, 'UTF-8') ?></div>
          <h2><?= htmlspecialchars($posts[0]['title'], ENT_QUOTES, 'UTF-8') ?></h2>
          <p><?= htmlspecialchars($posts[0]['content'], ENT_QUOTES, 'UTF-8') ?></p>
          <div class="author">
              <img src="/sia/uploads/test.png" alt="Author Image">
              <span><?= htmlspecialchars($posts[0]['username'] ?? 'Author', ENT_QUOTES, 'UTF-8') ?></span>
            
            </div> <div class="post-actions">
                   <svg style="cursor:pointer;"onclick="openUpdateModal(<?= htmlspecialchars($posts[0]['id'], ENT_QUOTES, 'UTF-8') ?>)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3F8ED2" class="bi bi-feather" viewBox="0 0 16 16">
  <path d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173"/>
</svg>
                 <a href="/sia/index.php/blog/delete/<?= htmlspecialchars($posts[0]['id'], ENT_QUOTES, 'UTF-8') ?>" onclick="return confirm('Are you sure you want to delete this post?')">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#EF3838" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
            
          </div> </div>
        
      </div>

    <!-- All Other Posts -->
    <div class="sub-posts-grid">
            <?php foreach (array_slice($posts, 1) as $post): ?>
          <div class="sub-post">
              <?php if (!empty($post['media'])): ?>
                  <?php if (preg_match('/\.(jpg|jpeg|png|gif|jfif)$/i', $post['media'])): ?>
                      <img src="/<?= htmlspecialchars($post['media'], ENT_QUOTES, 'UTF-8') ?>" alt="Image">
                  <?php elseif (preg_match('/\.(mp4|webm|ogg)$/i', $post['media'])): ?>
                      <video controls width="100%">
                          <source src="/<?= htmlspecialchars($post['media'], ENT_QUOTES, 'UTF-8') ?>">
                          Your browser does not support the video tag.
                      </video>
                  <?php endif; ?>
              <?php endif; ?>
      
              <div class="meta"><?= htmlspecialchars($post['category'] ?? 'Category', ENT_QUOTES, 'UTF-8') ?> • <?= htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8') ?></div>
              <h5><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></h5>
              <p><?= htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8') ?></p>
              <div class="author">
                  <img src="/sia/uploads/test.png" alt="Author Image">
                  <span><?= htmlspecialchars($post['username'] ?? '', ENT_QUOTES, 'UTF-8') ?></span>
              </div>
              <div class="post-actions">
                   <svg style="cursor:pointer;"onclick="openUpdateModal(<?= htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8') ?>)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3F8ED2" class="bi bi-feather" viewBox="0 0 16 16">
  <path d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173"/>
</svg>
                 <a href="/sia/index.php/blog/delete/<?= htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8') ?>" onclick="return confirm('Are you sure you want to delete this post?')">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#EF3838" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
    

          </div>
          </div>
      <?php endforeach; ?>
    </div>

  <?php else: ?>
   <center> <p>You have not submitted any stories yet.</p></center>
  <?php endif; ?>
</div>
<?php else: ?>
  <div style="text-align:center; padding: 50px;">
    <h3>Unauthorized Access</h3>
    <p>You must have a valid API key to view this content.</p>
  </div>
<?php endif; ?>
<script>
    // Open the modal and populate fields if postId exists
    function openUpdateModal(postId) {
        if (postId) {
            // Fetch the post data for editing
            fetch(`/sia/index.php/blog/getPost/${postId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // Populate the modal fields with the post data
                    document.getElementById('postId').value = data.id;
                    document.getElementById('title').value = data.title;
                    document.getElementById('content').value = data.content;
                    document.getElementById('category').value = data.category;

                    // Set the checkbox based on the existing data
                    document.getElementById('isAnonymous').checked = data.isAnonymous === 1;

                    // Update modal title and button text for editing
                    document.getElementById('modalTitle').textContent = "Update Post";
                    document.getElementById('modalSubmitButton').textContent = "Update Post";
                    document.getElementById('postForm').action = `/sia/index.php/blog/update/${postId}`;
                    document.getElementById('myModal').style.display = 'block';
                })
                .catch(error => console.error('Error fetching post data:', error));
        } else {
            // Clear the modal fields for creating a new post
            clearModalFields();

            // Update modal title and button text for creating a new post
            document.getElementById('modalTitle').textContent = "Create a New Story";
            document.getElementById('modalSubmitButton').textContent = "Save Post";
            document.getElementById('postForm').action = "/blog/save";
            document.getElementById('myModal').style.display = 'block';
        }
    }

    // Clear all modal fields
    function clearModalFields() {
        document.getElementById('postId').value = '';
        document.getElementById('title').value = '';
        document.getElementById('content').value = '';
        document.getElementById('category').value = '';
        document.getElementById('isAnonymous').checked = false; // Ensure checkbox is cleared
        document.getElementById('media').value = ''; // Clear the file input
    }

    // Close the modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Open the modal for creating a new post
    document.getElementById('stickyBtn').addEventListener('click', function () {
        clearModalFields(); // Ensure fields are cleared
        document.getElementById('modalTitle').textContent = "Create a New Story";
        document.getElementById('modalSubmitButton').textContent = "Save Post";
        document.getElementById('postForm').action = "/blog/save";
        document.getElementById('myModal').style.display = 'block';
    });
</script>
<br><br><br><br>
</body>
</html>