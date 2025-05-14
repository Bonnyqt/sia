<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/sia/uploads/test.png">
   <title>Lost & Vocal</title>
   
               
   <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">
      
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">    
             

</head>
<body>

<?php $this->load->view('partials/header'); ?>
<center><img src="/sia/uploads/test.png" alt="" style="height:170px;width:170px;"></center>
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
   
                <div class="container">
                 
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center" style="font-size:60px;">Share. Empathize. Be Vocal.</h1>

                            <h6 class="text-center">platform for everyone</h6>
<br>
                          <?php if ($this->session->userdata('api_key')): ?>
                              <form method="GET" action="/sia/index.php/blog/search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text fas fa-search" id="basic-addon1" style="margin-top:5px;">                            
                                    </span>                         
  <input name="query" type="search" class="form-control search-input" placeholder="Search for Authors, Stories, Contents ..." aria-label="Search" style="">
                                    <button type="submit" class="form-control">Search</button>
                                </div>
                                </form><?php endif; ?>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                    <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="https://kaufman.usc.edu/wp-content/uploads/2018/03/38905127020_700815724c_h.jpg" class="custom-block-image img-fluid" alt="" style="opacity:20%">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Collaborate</h5>

                                            <p class="text-white">Wrap up your stories using this website and provide wonderful and positive reinforcement towards individuals who are in need of support</p>

                              
                                        </div>

                                    
                                    </div>

                                    <div class="social-share d-flex">
                                    

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                            <a href="https://x.com/xmarquezbon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg></a>
                                            </li>
&nbsp;&nbsp;&nbsp;&nbsp;
                                            <li class="social-icon-item">
                                           <a href="https://www.facebook.com/marquez.jonbon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1877F2" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></a>
                                            </li>

                                          
                                        </ul>

                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="https://miro.medium.com/v2/resize:fit:820/0*e7vpRomF8PRQXJQg.jpg" class="custom-block-image img-fluid" alt="" style="opacity:20%">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Share your stories confidentialy</h5>

                                            <p class="text-white">You may post and share your stories by anonymously submitting your information.</p>

                               
                                        </div>

                                    
                                    </div>

                                    <div class="social-share d-flex">
                                    


                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </section>
<br><br>

</body>
</html>