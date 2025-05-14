<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/uploads/test.png">
  <title>LV | About Us</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 20px;
  background-color: #f0f0f0;
}

.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
  background-color: transparent;
}

.card {
  position: relative;
  width: 100%;
  aspect-ratio: 3 / 4;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  animation: fadeInZoom 0.8s ease both;
  border: none !important;
  background: none !important;
}

@keyframes fadeInZoom {
  0% {
    opacity: 0;
    transform: scale(0.95);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease, filter 0.4s ease;
  border-radius: 16px;
}

.card:hover img {
  transform: scale(1.05);
  filter: brightness(1.1);
}

.card-name {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(6px);
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 28px;
  font-family: myFirstFont;
  opacity: 0;
  transition: opacity 0.4s ease;
  padding: 10px;
}

.card:hover .card-name {
  opacity: 1;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 30px rgba(0, 0, 0, 0.2);
}

/* Responsive Grid */
@media (min-width: 1024px) {
  .card-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (max-width: 1023px) {
  .card-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}


  </style>
</head>
<body>
  
<?php $this->load->view('partials/header'); ?>

<br>
<h1 style="color:white; font-family:myFirstFont; font-size:90px;">About Us</h1>
<div style="display:flex; align-items:center; justify-content:center; text-align:justify; gap:70px;"><img src="/sia/uploads/test.png" alt="" style="width:400px; height:400px;"><p style="width:700px; font-size:25px;font-family:myFirstFont;">Welcome to Lost & Vocal, a community-driven blogging platform where personal experiences come to life. Here, individuals are invited to share their stories, thoughts, and reflections in an open space that encourages honesty, growth, and connection.

At Lost & Vocal, we believe that everyone has a voice, and that voice deserves to be heard. Whether you're sharing your triumphs, struggles, or everything in between, our platform offers a space for self-expression and discovery. We provide a welcoming environment where people from all walks of life can explore, learn, and empathize with others' journeys.

Our mission is to create a place where your experiences matter—where you are encouraged to speak up, share your thoughts, and find support from a community of like-minded individuals. Life isn't always linear, and sometimes the most powerful moments come from the most vulnerable places.

Join us in making Lost & Vocal a space where stories can be heard, voices can be raised, and personal experiences can inspire others.</p></div>

<br>
<h1 style="color:white; font-family:myFirstFont; font-size:90px;">Our Team</h1>
<div class="card-grid">
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/487067803_9493406084061919_3480662800720734936_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeE5RdV2ansBBoSJ-1a0V83feptwq0D3ahZ6m3CrQPdqFi3h17UWYgOXi64vHUB3LrNsx0164uUTvKbUHMhOHw7h&_nc_ohc=kin_HjjMDfYQ7kNvwEydKE0&_nc_oc=AdmMcCb-5555ZDuZK9_gMP4NWRN3IOywJbaS9FUE-TUWLjX3Ha6VpEq-tSKBMDk_M_o&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=gpFJSYf5f6EqaUoSGdWmBg&oh=00_AfJ0B_C9A7ijWCRqmNpAReqjprwgXGMEI6m3pF_WTwTSrw&oe=6820E2BD" alt="Card 1">
    <div class="card-name">Marquez, Jon Bon Leo B. <br> Software Engineer</div>

  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t1.6435-9/207068834_2911543089160772_5975371104242455096_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeH_OQ0D-sUoFxdQ81-fSxBi6ynpQDT68OXrKelANPrw5bqUDnU7NubfQYcYuZZjumlKkk2PKcBFvOtvq7w4SQhB&_nc_ohc=EyqOIyJNdXMQ7kNvwHKWN3W&_nc_oc=Adk5XcjkqN_56O-EiQyqhn98rnNmzQoZ4IGoZqoCKJsFBaH7lAeoKGjar9B3BIUKZvM&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=bfydmDN6-Q9OMF3FjMZpuw&oh=00_AfLRTfdg3oNVLn6Wx23aQDt3xm9oeofJC7vjzqzigVrHnQ&oe=6842856F" alt="Card 2">
    <div class="card-name">Aniceto, Alf Samuel <br> Tester</div>

  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t1.6435-9/38600619_1584618501642196_6971233345954906112_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGzl7ppI7PrKGwwU3iGtSiuztXlQu55SOjO1eVC7nlI6Oj8PSDwNH_HdnG8kSrDC_25tHGhomSI5kGdCbp6XahI&_nc_ohc=t10SfK67xrsQ7kNvwHYR-_Z&_nc_oc=AdkShZ9PQ7IPmZDrW4HqKIUykzYmEcyHaKKC3F2t3IA9dgM3-cnTvrkLUtO05hlSu2s&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=emAzepnM-7KOgDyb03_fPg&oh=00_AfLcV2k19rEXl7F6mGm280XHV0sIh_7LqaFO6f4Z-QV3aw&oe=684271C2" alt="Card 3">
    <div class="card-name">Solleza, Rams Mackenzei <br> Tester </div>

  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/492295670_2948568975530617_7692390048031109889_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeF2ok4NB47tFOEUPccB7sNbMQ5Ts2jNBfwxDlOzaM0F_NSQ2lyDuyQjRIKK-l4_vkps70KYw383xbdzlENZ0a2T&_nc_ohc=SBFzBgIXdQUQ7kNvwHGW1e3&_nc_oc=AdkCHd-yxnZroly2PdIfHHfwr7AX8QVSmWjV_5W-0M8wuLcH2iyC6q8jZ74nw5Ub8tQ&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=MP8JL9LSaUvmBvmKpe2KCA&oh=00_AfKlOSVbhZDvEV2_bKzTPl0GghnE0dM0S9CPmYlpIJn_xA&oe=6820C5E8" alt="Card 4">
    <div class="card-name">Dalida, Mark Jeevan <br> Database Administrator</div>

  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/472388774_962349099288019_1260929372677172359_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeE2G8erQyx8lH6kAO3uEdcI-RVk1qJNuNb5FWTWok241r20WFf_y_ZtwbkiIyv2zmGjdY7pvw0hkxkQI6s8jc1U&_nc_ohc=GltDyzIMeL4Q7kNvwFWwum5&_nc_oc=AdnEIyMrhsiN72HPymqhHT2WVD7GnpG3aN_gJZ94mfAWLX8c_rqPuIr12Bimi8CYxro&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=v4cdl1mIQvJarqstD-orgw&oh=00_AfJFvwef7Mx0FnbKzvLS79g5ciKXz7QS5bxrj4NgIQoudg&oe=6820C4F0" alt="Card 5">
    <div class="card-name">Araneta, Jenny Mae <br> Business Analyst</div>
   
  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-1/493265775_9608002775988043_3818029406807595791_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=106&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeEJwTf-QJGCcMHXIG0yl41Exgk-1EytnDfGCT7UTK2cN0V1h63gkJrBMf8CQi6VXRpxa4KfBVPUFilFFKyyRKYt&_nc_ohc=Ukvu_6iZIMYQ7kNvwFNq5mt&_nc_oc=AdldsVCQIEkC_9iMFttfIrajqALRyRH6HBJmj7sbXszO_1r_oP-E3qS9-d4ZJNXN17s&_nc_zt=24&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=PTUu155_lBOOeCPoK74AQw&oh=00_AfKV6ITYDHvryfk5wNorGjfwxhQf_WMbAHIW-znb7XfjBA&oe=6820BB8B" alt="Card 6">
    <div class="card-name">Revilla, Aron Viel <br> Business Analyst</div>
 
  </div>
  <div class="card">
    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/407253639_6100513000051511_1814477574969328518_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFOjbyDj0aulQ1i6Xsxvnn1-pMXg8ven-n6kxeDy96f6T-IXRNUnM0woll4MRILFMZt36tEb7aC94DXgTRvg2s8&_nc_ohc=w_b6V8yfSnIQ7kNvwEqn4ft&_nc_oc=AdnKPxffw_eJMDksvminl_UsCXG-WLmN9oOO2j0aFN9SKL2XUTMY-u8lofh6rBixpCs&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=iqJ94dCGWxSf8090BpbKQw&oh=00_AfKqjLSTgzFfa3eiuqCvRz4AGHtK5iedCgHvTAxqKskQNg&oe=6820D8FF" alt="Card 7">
    <div class="card-name">Funtanilla, Cyrell <br> Project Manager</div>
 
  </div>
</div>
<br><br><br><br>
</body>
</html>
