

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LV | Blogs</title>
  <link rel="icon" type="image/x-icon" href="/sia/uploads/test.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

/* Ensure other content is spaced correctly in flex layout */
.featured-post .content {
  flex-grow: 1; /* Allow content to take up remaining space */
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


.sub-post p {
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Limit to 3 lines */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 4.5em; /* Adjust based on line height (approx. 1.5em per line) */
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
  display: flex;
  gap: 17px;
  justify-content: flex-start;
  margin-top: 10px;
  font-size: 1.6rem;
  color: #555;
}

.post-actions i {
  cursor: pointer;
  transition: color 0.2s;
}

.post-actions .fa-heart:hover {
  color: #e74c3c; /* Red for heart, or change as needed */
}
.post-actions .fa-comment:hover {
  color:rgb(44, 179, 100); /* Red for heart, or change as needed */
}

  </style>
</head>
<body>
<?php $this->load->view('partials/header'); ?>



<br><h1 style="color:white; font-family:myFirstFont; font-size:90px;">Blogs</h1><br>

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
                  <img src="/<?= htmlspecialchars($posts[0]['media'], ENT_QUOTES, 'UTF-8') ?>" alt="Featured Image" class="featured-img">
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
          </div>
      </div>
    
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
                <span><?= htmlspecialchars($post['username'] ?? 'Author', ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>

  <?php else: ?>
   <center> <p>No posts yet.</p></center>
  <?php endif; ?>
</div>
<?php else: ?>
  <div style="text-align:center; padding: 50px;">
    <h3>Unauthorized Access</h3>
    <p>You must have a valid API key to view this content.</p>
  </div>
<?php endif; ?>


<br><br><br>

</body>
<script>
    function likePost(postId) {
        fetch(`/blog/like/${postId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById(`like-count-${postId}`).textContent = data.likes;
            } else {
                alert(data.error || 'Failed to like the post.');
            }
        })
        .catch(error => console.error('Error:', error));
    }

    function openCommentModal(postId) {
        const comment = prompt('Enter your comment:');
        if (comment) {
            fetch(`/blog/comment/${postId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ comment }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Comment added successfully!');
                } else {
                    alert(data.error || 'Failed to add comment.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }
</script>
</html>