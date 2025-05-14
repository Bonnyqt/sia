<link rel="icon" type="image/x-icon" href="/sia/uploads/test.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Inter', sans-serif;
  background-image: linear-gradient(to bottom, #364050, #192130);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  color: #f1f5f9;
  padding: 40px;
}


    @font-face {
  font-family: myFirstFont;
  src: url(/sia/uploads/webFont.ttf);
}
  



    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      gap: 100px;
      margin-left:40px;
      list-style: none;
      font-size:23px;
      font-family: myFirstFont;
    }

    nav ul li {
      cursor: pointer;
      color:rgb(255, 255, 255);
    }

    nav ul li:hover {
      color: #f8fafc;
    }
    input[type="text"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-top: 6px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: box-shadow 0.3s ease, transform 0.3s ease;
}

input[type="text"]:focus,
textarea:focus,
input[type="file"]:focus {
  outline: none;
  box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
  transform: scale(1.02);
}
@keyframes slideUpFade {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.container {
  animation: slideUpFade 0.6s ease-out;
}
    .search-box input {
      background-color: #334155;
      border: none;
      padding: 8px 12px;
      border-radius: 8px;
      color: white;
    }

    header {
    background-color: rgba(128, 128, 128, 0.2); /* semi-transparent grey */
    padding: 15px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px); /* for Safari support */
    position: relative;
    transition: all 0.3s ease-in-out;
}

.sticky {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    border-radius: 0px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: slideDown 0.3s ease-in-out;
}

@keyframes slideDown {
    from {
        transform: translateY(-100%);
    }
    to {
        transform: translateY(0);
    }
}
nav a {

    transition: all 0.3s ease;
}

nav a:hover, nav a:focus {
    color: #fff; /* Keep the text white on hover */
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 255, 255, 0.4);
}

nav a:active {
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.9), 0 0 25px rgba(255, 255, 255, 0.7), 0 0 35px rgba(255, 255, 255, 0.5);
}

nav a.active {
    color: #fff;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 255, 255, 0.4);
}
#stickyBtn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  padding: 15px 30px;
  background-color:#13547a;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  z-index: 9999;
  transition: background-color 0.3s ease;
}

#stickyBtn:hover {
  background-color: #0056b3;
}


.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 10000;
  opacity: 0;
  animation: fadeIn 0.4s forwards;
  overflow: hidden;
}
.modal {
  backdrop-filter: blur(8px); /* NEW */
  -webkit-backdrop-filter: blur(8px); /* Safari support */
}

/* Modal Content */
.modal-content {
  background-color: white;
  padding: 30px;
  width: 50%;
  max-width: 600px;
  margin: 0 auto;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  animation: scaleIn 0.5s ease-out forwards;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(1); /* Final state */
  background: linear-gradient(135deg, #ffffff, #f0f4f8); /* NEW */
}

/* Background fade-in */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

/* Content scale-in while centered */
@keyframes scaleIn {
  from {
    transform: translate(-50%, -50%) scale(0.7); /* Centered and small */
    opacity: 0;
  }
  to {
    transform: translate(-50%, -50%) scale(1); /* Centered and full size */
    opacity: 1;
  }
}


/* Close Button Styles */
.close-btn {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.close-btn2 {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close-btn2:hover,
.close-btn2:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.close-btn3 {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close-btn3:hover,
.close-btn3:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
h1 {
  font-size: 1.8em;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* Form Elements Styling */
label {
  font-weight: bold;
  margin-top: 10px;
  display: block;
  color: #333;
}



textarea {
  resize: vertical;
}

button[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  font-size: 1.2em;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

/* Error message styling */
.message {
  color: red;
  text-align: center;
  margin: 10px 0;
  font-weight: bold;
}

.form-group {
        margin-bottom: 1rem;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    select {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
        background-color: #f9f9f9;
        color: #333;
    }

    select:focus {
        border-color: #007BFF;
        outline: none;
        background-color: #fff;
    }

    #loginPopup.modal, #signupPopup.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1000;
    justify-content: center;
    align-items: center;
    display: flex; /* Make sure the flex display is enabled */
  }

  /* Modal content */
  #loginPopup .modal-content, #signupPopup .modal-content {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 12px;
    width: 320px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    position: relative;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  }

  /* Close button */
  #loginPopup .close-btn, #signupPopup .close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
    color: #888;
  }

  /* Title */
  #loginPopup h2, #signupPopup h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
  }

  /* Label styles */
  #loginPopup label, #signupPopup label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
    font-size: 14px;
    color: #444;
  }

  /* Input fields */
  #loginPopup input[type="text"],
  #loginPopup input[type="password"],
  #signupPopup input[type="text"],
  #signupPopup input[type="email"],
  #signupPopup input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
  }

  /* Submit button */
  #loginPopup button[type="submit"], 
  #signupPopup button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  #loginPopup button[type="submit"]:hover, 
  #signupPopup button[type="submit"]:hover {
    background-color: #45a049;
  }

  /* Link styles */
  #loginPopup a, #signupPopup a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
  }

  #loginPopup a:hover, #signupPopup a:hover {
    text-decoration: underline;
  }

  /* Error message styles */
  .error-message {
    background-color: #f8d7da;
    padding: 10px;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 14px;
  }
  
</style>


<div id="loginPopup" class="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.6); z-index:1000; justify-content:center; align-items:center;">
  <div style="background-image: linear-gradient(to bottom, #364050, #192130); padding:30px; border-radius:10px; width:600px; font-family:Arial; position:relative;">
    <span class="close-btn2" onclick="document.getElementById('loginPopup').style.display='none'">&times;</span>
    <center><img src="/sia/uploads/test.png" alt="" style="height:26px;width:26px;"></center>
    <h2 style="font-family:myFirstFont; color:white; font-size:50px;">Login</h2>
    <?php if ($this->session->flashdata('error')): ?>
    <p class="error-message"><?= $this->session->flashdata('error') ?></p>
<?php endif; ?>
    <form method="post" action="/sia/index.php/auth/doLogin">
        <label for="username"style="font-family:myFirstFont; color:white; font-size:20px;">Username:</label>
        <input type="text" name="username" required>

        <label for="password"style="font-family:myFirstFont; color:white; font-size:20px;">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" style="background-color:#13547a;">Login</button>
    </form>
    <a href="#" onclick="switchToSignup()" style="font-family:myFirstFont; color:white; font-size:20px;">No account? Signup</a>
  </div>
</div>

<div id="signupPopup" class="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.6); z-index:1000; justify-content:center; align-items:center;">
  <div style="background-image: linear-gradient(to bottom, #364050, #192130); padding:30px; border-radius:10px; width:600px; font-family:Arial; position:relative;">
    <span class="close-btn" onclick="document.getElementById('signupPopup').style.display='none'">&times;</span>
    <center><img src="/sia/uploads/test.png" alt="" style="height:26px;width:26px;"></center>
    <h2 style="font-family:myFirstFont; color:white; font-size:50px;">Signup</h2>
    <?php if ($this->session->flashdata('error')): ?>
    <p class="error-message"><?= $this->session->flashdata('error') ?></p>
<?php endif; ?>
    <form method="post" action="/sia/index.php/register">
        <label for="username" style="font-family:myFirstFont; color:white; font-size:20px;">Username:</label>
        <input type="text" name="username" required>

        <label for="email"style="font-family:myFirstFont; color:white; font-size:20px;">Email:</label>
        <input type="email" name="email" required>

        <label for="password" style="font-family:myFirstFont; color:white; font-size:20px;">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" style="background-color:#13547a;">Register</button>
    </form>

    <a href="#" onclick="switchToLogin()"style="font-family:myFirstFont; color:white; font-size:20px;">Already have an account? Login</a>
  </div>
</div>


<header class="d-flex justify-content-between align-items-center mb-4">

  <div class="d-flex align-items-center">
  <img src="/sia/uploads/test.png" alt="" style="height:50px; width:50px;">
    <h4 class="ms-2 mt-2" style="font-family: myFirstFont;">Lost & Vocal</h4>
  </div>

  <nav class="flex-grow-1 text-center" >
    <ul class="d-inline-flex mb-0 list-unstyled justify-content-center">
      <li><a href="/sia" class="text-decoration-none text-light">Home</a></li>
      <li><a href="/sia/index.php/blog/list" class="text-decoration-none text-light">Blogs</a></li>
      <li><a href="/sia/index.php/blog/about" class="text-decoration-none text-light">About Us</a></li>
      <li><a href="/sia/index.php/blog/myposts" class="text-decoration-none text-light">My Posts</a></li>
    </ul>
  </nav>

  <div class="d-flex align-items-center gap-4">
  <?php if ($this->session->userdata('api_key')): ?>
    <form method="GET" action="/sia/index.php/blog/search">
        <input type="text" name="query" placeholder="Search" class="search-input form-control form-control-sm bg-dark text-white border-0 rounded" style="width: 160px; align-items:center;">
    </form>
<?php endif; ?>
  <style>
      .search-input::placeholder {
        color: grey;
        opacity: 1;
        font-family: myFirstFont;
        font-size:20px;
      }
    </style>

   <?php if (!$this->session->userdata('user_id')): ?>
    <a href="#" onclick="openLoginPopup()" style="font-family: myFirstFont; font-size:20px; color:white; text-decoration: none; margin-right:10px;">Login</a>



<!-- JavaScript -->
<script>
  function openLoginPopup() {
    document.getElementById('loginPopup').style.display = 'flex';
  }

  function closeLoginPopup() {
    document.getElementById('loginPopup').style.display = 'none';
  }

  function submitLogin() {
    // Handle login logic here
    alert("Logging in...");
    closeLoginPopup();
  }
</script>


    <?php else: ?>
        <?php if ($this->session->userdata('user_id')): ?>
    <span class="text-white small" style="font-family: myFirstFont; font-size:20px; cursor: pointer;" onclick="openProfileModal()">
    Hello, <?= htmlspecialchars($this->session->userdata('username'), ENT_QUOTES, 'UTF-8') ?>
</span>
<?php endif; ?>
        <a href="/sia/index.php/logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#eb6363" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></a>
    <?php endif; ?>
  </div>


</header>

<div id="profileModal" class="modal" style="display:none;">
    <div class="modal-content" style="background-image: linear-gradient(to bottom, #364050, #192130);">
        <span class="close-btn3" onclick="document.getElementById('profileModal').style.display='none'">&times;</span>
        <div class="container">
            <center><img src="/sia/uploads/test.png" alt="Profile Image" style="height:50px;width:50px;border-radius:50%;"></center>
            <center><h2 style="font-family:myFirstFont; color:white; font-size:30px;">Profile</h2></center>
            <p style="font-family:myFirstFont; color:white; font-size:20px;">Username: <?= htmlspecialchars($this->session->userdata('username'), ENT_QUOTES, 'UTF-8') ?></p>
            <p style="font-family:myFirstFont; color:white; font-size:20px;">Email: <?= htmlspecialchars($this->session->userdata('email'), ENT_QUOTES, 'UTF-8') ?></p>
      
<p style="font-family:myFirstFont; color:white; font-size:20px;">
    API Key: <button onclick="requestPassword()" style="background: none; border: none; color: #007bff; cursor: pointer; text-decoration: underline;">Show API Key</button>
</p>
<p id="apiKeyDisplay" style="font-family:myFirstFont; color:white; font-size:20px; display: none;">
    <?= htmlspecialchars($this->session->userdata('api_key'), ENT_QUOTES, 'UTF-8') ?>
</p></div>
    </div>
</div>
<div id="passwordModal" class="modal" style="display:none;">
    <div class="modal-content" style="background-image: linear-gradient(to bottom, #364050, #192130);">
        <span class="close-btn3" onclick="document.getElementById('passwordModal').style.display='none'">&times;</span>
        <div class="container">
            <h2 style="font-family:myFirstFont; color:white; font-size:30px;">Confirm Password</h2>
            <p style="font-family:myFirstFont; color:white; font-size:20px;">Enter your password to view the API key:</p>
            <form id="passwordForm">
                <input type="password" id="passwordInput" placeholder="Enter your password" required style="width: 100%; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <button type="button" onclick="verifyPassword()" style="background-color:#13547a; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-top: 10px;">Submit</button>
            </form>
            <p id="passwordError" style="color: red; display: none; font-family: myFirstFont; font-size: 18px;">Incorrect password. Please try again.</p>
        </div>
    </div>
</div>
<script>
    function requestPassword() {
        document.getElementById('passwordModal').style.display = 'block';
    }

    function verifyPassword() {
        const password = document.getElementById('passwordInput').value;

        // Send the password to the server for verification
        fetch('/sia/index.php/auth/verifyPassword', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Password is correct, show the API key
                document.getElementById('passwordModal').style.display = 'none';
                document.getElementById('apiKeyDisplay').style.display = 'block';
            } else {
                // Password is incorrect, show an error message
                document.getElementById('passwordError').style.display = 'block';
            }
        })
        .catch(error => console.error('Error verifying password:', error));
    }

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        const modal = document.getElementById('passwordModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>
<script>
  function switchToSignup() {
    document.getElementById('loginPopup').style.display = 'none';
    document.getElementById('signupPopup').style.display = 'flex';
  }

  function switchToLogin() {
    document.getElementById('signupPopup').style.display = 'none';
    document.getElementById('loginPopup').style.display = 'flex';
  }
</script>

<button id="stickyBtn" class="btn"><i class="fas fa-plus"></i> Share your story</button>

<div id="myModal" class="modal">
    <div class="modal-content" style="background-image: linear-gradient(to bottom, #364050, #192130);">
        <span class="close-btn3" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
        <div class="container">
            <center><img src="/sia/uploads/test.png" alt="" style="height:26px;width:26px;"></center>
            <center><h2 id="modalTitle" style="font-family:myFirstFont; color:white; font-size:50px;">Create a new story</h2></center>

            <!-- Show any error messages -->
            <?php if ($this->session->flashdata('error')): ?>
    <div class="message"><?= $this->session->flashdata('error') ?></div>
<?php endif; ?>

            <!-- Blog Post Form -->
            <form id="postForm" method="post" action="/sia/index.php/blog/save" enctype="multipart/form-data">
                <input type="hidden" name="id" id="postId"> <!-- Hidden field for post ID -->

                <label for="title" style="font-family:myFirstFont; color:white; font-size:20px;">Title</label>
                <input type="text" name="title" id="title" required>

                <label for="content" style="font-family:myFirstFont; color:white; font-size:20px;">Content</label>
                <textarea name="content" id="content" rows="6" required></textarea>

                <label for="media" style="font-family:myFirstFont; color:white; font-size:20px;">Upload Image or Video</label>
                <input type="file" name="media" id="media" accept="image/*,video/*,.gif,.avif,.jfif">

                <div class="form-group">
                    <label for="category" style="font-family:myFirstFont; color:white; font-size:20px;">Category</label>
                    <select name="category" id="category" required>
                        <option value="">-- Select Category --</option>
                        <option value="General">General</option>
                        <option value="Technology">Technology</option>
                        <option value="Education">Education</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Health">Health</option>
                        <option value="Travel">Travel</option>
                    </select>
                </div>

                <label for="isAnonymous" style="font-family:myFirstFont; color:white; font-size:20px;">
                    <input type="checkbox" name="isAnonymous" id="isAnonymous" value="true">
                    &nbsp; Post as Anonymous
                </label>

                <button type="submit" id="modalSubmitButton" style="background-color:#13547a;">Save Post</button>
            </form>
        </div>
    </div>
</div>


<?php if ($this->session->userdata('first_login')): ?>
    <!-- Modal HTML -->
    <div id="firstLoginModal" style="
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: linear-gradient(to right, #364050, #192130);
    backdrop-filter: blur(4px);
    z-index: 1000;
    animation: fadeIn 0.4s ease-in-out;
    ">
        <div class="modal-content" style="
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 25px;
            width: 90%;
            max-width: 400px;
            border-radius: 16px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: slideUp 0.4s ease-in-out;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        ">
            <h2 style="color: #333; margin-bottom: 15px;">🎉 Welcome!</h2>
            <p style="color: #444;">Here is your unique API key:</p>
            <code style="
                display: block;
                background: #f3f4f6;
                padding: 12px 15px;
                margin: 15px 0;
                font-size: 0.95rem;
                font-family: 'Courier New', Courier, monospace;
                color: #111;
                word-break: break-word;
                border: 1px solid #ddd;
                border-radius: 8px;
            "><?= $this->session->userdata('api_key') ?></code>
            <button id="closeModal" style="
                margin-top: 15px;
                padding: 10px 25px;
                background: #6c5ce7;
                color: #fff;
                font-weight: 600;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background 0.3s ease;
            " onmouseover="this.style.background='#5a4bcf'" onmouseout="this.style.background='#6c5ce7'">
                Close
            </button>
        </div>
    </div>


<style>
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slideUp {
  from { transform: translateY(40px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
</style>

<script>
document.getElementById('closeModal').addEventListener('click', function () {
  document.getElementById('firstLoginModal').style.display = 'none';
});
</script>

  <script>
document.getElementById('closeModal').addEventListener('click', function () {
  document.getElementById('firstLoginModal').style.display = 'none';

  fetch('/sia/index.php/auth/markFirstLoginDone', {
      method: 'POST',
      headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Content-Type': 'application/json'
      },
      credentials: 'same-origin' // Important to include session cookies
  })
  .then(response => response.json())
  .then(data => {
      console.log('Server response:', data);
  })
  .catch(error => {
      console.error('AJAX error:', error);
  });
});
</script>

 
<?php endif; ?>


<script>
    // Listen for the scroll event and add/remove the sticky class
window.onscroll = function() {
    var header = document.querySelector("header");
    if (window.scrollY > 100) { // Adjust the scroll threshold if needed
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
};
// Add active class to the current page's link
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("nav a");
    links.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });
});

</script>
<script>
    function openProfileModal() {
        document.getElementById('profileModal').style.display = 'block';
    }

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        var modal = document.getElementById('profileModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>
<script>
// Get the modal and button elements
var modal = document.getElementById("myModal");
var btn = document.getElementById("stickyBtn"); // Assuming you have a sticky button to open the modal


// Open the modal when the button is clicked
btn.onclick = function() {
    modal.style.display = "block";
    modal.style.opacity = "1"; // Ensure the modal has full opacity when shown
}

// Close the modal when the "x" is clicked
closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>