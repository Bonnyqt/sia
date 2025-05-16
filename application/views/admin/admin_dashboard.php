
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
  <title>
    LV | Administrator Dashboard
  </title>
  <link rel="icon" type="image/png" href="/sia/uploads/test.png">
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="/sia/assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-100">
 <?php $this->load->view('admin/admin_header'); ?>
 
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
               <a href="/sia/index.php/admin/admin_users"> <div class="card">
                <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl" style="align-items: center; display: flex; justify-content: center; width: 50px; height: 50px;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
                      </div>
                      
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                         <?php echo $user_count; ?>
                      </h5>
                      <span class="text-white text-sm">Users Registered</span>
                    </div>
                   
                  </div>
                </div>
              </div></a>
            </div>
          <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
               <a href="/sia/index.php/admin/admin_blogs"> <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl" style="align-items: center; display: flex; justify-content: center; width: 50px; height: 50px;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-right-heart-fill" viewBox="0 0 16 16">
  <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
</svg>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                         <?php echo $blog_count; ?>
                      </h5>
                      <span class="text-white text-sm">Blogs Posted</span>
                    </div>
                   
                  </div>
                </div>
              </div></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl" style="align-items: center; display: flex; justify-content: center; width: 50px; height: 50px;">

                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        2300
                      </h5>
                      <span class="text-white text-sm">Purchases</span>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
              <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                  <div class="row">
                    <div class="col-8 text-start">
                      <div class="icon icon-shape bg-white shadow text-center border-radius-2xl" style="align-items: center; display: flex; justify-content: center; width: 50px; height: 50px;">

                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
                      </div>
                      <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        940
                      </h5>
                      <span class="text-white text-sm">Likes</span>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Recent Logs</h6>
            </div>
            <div class="card-body pb-0 p-3">
    <ul class="list-group">
        <?php if (!empty($recent_logs)): ?>
            <?php foreach ($recent_logs as $log): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center px-2 py-2" style="font-size:15px;">
                    <div>
                        <strong><?php echo htmlspecialchars($log->username); ?> </strong>| <?php echo htmlspecialchars($log->action); ?><br>
                        <small class="text-muted"><?php echo date('M d, Y H:i', strtotime($log->created_at)); ?></small>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item text-muted">No recent logs found.</li>
        <?php endif; ?>
    </ul>
</div>

            <div class="card-footer pt-0 p-3 d-flex align-items-center">
              <div class="w-60">
                <p class="text-sm">
                 
                </p>
              </div>
              <div class="w-40 text-end">
                <a class="btn btn-dark mb-0 text-end" href="admin_logs">View all logs</a>
              </div>
            </div>
            
          </div>
      
        </div>
        
      </div>
     <hr style="border: none; height: 1px; background-color: black;">
     <h1 style="font-family:myFirstFont;">Recent Blogs</h1>
<div class="row">
    <?php foreach ($blogs as $blog): ?>
    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
        <a href="/sia/index.php/admin/admin_blogs/view/<?php echo $blog->id; ?>"> 
            <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-8 text-start">
                            
                            
    <div style="display: flex; align-items: center;">
        <?php if (!empty($blog->media)): ?>
            <?php if (preg_match('/\.(jpg|jpeg|png|gif|jfif|webp)$/i', $blog->media)): ?>
                <img src="/<?= htmlspecialchars($blog->media, ENT_QUOTES, 'UTF-8') ?>" alt="Media" style="width: 100px; height: 100px; padding:10px;">
            <?php elseif (preg_match('/\.(mp4|webm|ogg)$/i', $blog->media)): ?>
                <video controls style="max-width: 150px; max-height: 100px;">
                    <source src="/<?= htmlspecialchars($blog->media, ENT_QUOTES, 'UTF-8') ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php else: ?>
            —
        <?php endif; ?>

        <div style="display: flex; flex-direction: column; padding-left: 10px;">
            <span style="font-family:myFirstFont; font-size:30px; color:white;">Title: <?= htmlspecialchars($blog->title); ?></span>
            <span style="font-family:myFirstFont;">Author: <?= htmlspecialchars($blog->username); ?></span>
        </div>
    </div>


                        </div>
                    </div>
                </div>
            </div>
        </a>
        <br>
    </div>
    
    <?php endforeach; ?>
</div>



  <script src="/sia/assets/js/core/popper.min.js"></script>
  <script src="/sia/assets/js/core/bootstrap.min.js"></script>
  <script src="/sia/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/sia/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/sia/assets/js/plugins/chartjs.min.js"></script>


  <script src="/sia/assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>