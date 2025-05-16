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
    <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t39.30808-6/487067803_9493406084061919_3480662800720734936_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=4td03vdzwjwQ7kNvwF3F_B9&_nc_oc=AdkAThbM52tbWgopgs7lVdzsUpdn1e9XhnM6jd8QfAfndF1s-peG5dRHV2bxhyeYp2I&_nc_zt=23&_nc_ht=scontent.fcrk1-3.fna&_nc_gid=pcUeOFgXKKI8UA9otmY9uQ&oh=00_AfKb0vyS7fm69rQm-DtsOlxsvN0Hji02ujL97WptSE-8aQ&oe=682BDF3D" alt="Card 1">
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
    <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t39.30808-6/492295670_2948568975530617_7692390048031109889_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=I9utk8hZfqYQ7kNvwF03QE1&_nc_oc=AdmvsHGf7Qv_6n35gd1BFNjikTqp9NnklSbIoEtw_amL8qi1lmQegGDtgUW5_WF5f-I&_nc_zt=23&_nc_ht=scontent.fcrk1-3.fna&_nc_gid=Owga4LEEdvI9Sb_B9hCgfg&oh=00_AfIjYOw7MNt9yKBWUwDJoX4ouQikjnDzVm8f0gO9ZVDMzQ&oe=682BFAA8" alt="Card 4">
    <div class="card-name">Dalida, Mark Jeevan <br> Database Administrator</div>

  </div>
  <div class="card">
    <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t39.30808-6/472388774_962349099288019_1260929372677172359_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=FUcH5Mbq7H8Q7kNvwHTVSUo&_nc_oc=AdnddUE-pxl6gFffLQT3cOEaS_XzqXCDzyv44-x70roReYrwG46i_T5ToIMC94eMN_k&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&_nc_gid=6R68KiF_CyyK-Pq4ujMa8Q&oh=00_AfJv0nNKGtsy5fbNMgkCR1_VIJ1I3NUJHgiti3WlDZqIsQ&oe=682BF9B0" alt="Card 5">
    <div class="card-name">Araneta, Jenny Mae <br> Business Analyst</div>
   
  </div>
  <div class="card">
    <img src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/454647729_1042427507476611_654931354208277065_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_ohc=MGchL372VV4Q7kNvwHr18Nc&_nc_oc=AdkMCOWiWEtOLVuQTHIzZzXFaAuFqA7YOhWydtU2KGMAEl8mJR1AxbSDyt0NUAnTqWE&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD2QHJXrtaoM0GS2cKmfkH9JKqe2V2rgQ8mZLG9Dcv_b-wxA&oe=684D829D" alt="Card 6">
    <div class="card-name">Revilla, Aron Viel <br> Business Analyst</div>
 
  </div>
  <div class="card">
    <img src="https://scontent.fcrk1-5.fna.fbcdn.net/v/t39.30808-6/407253639_6100513000051511_1814477574969328518_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=cvqwtfaw1NwQ7kNvwEkM5i7&_nc_oc=AdnVfW74TGscFWk6XzhnrHAYdch4h96-vqM05SD2NjOYwPm2g1y79q1JoVSQ3SFHjB8&_nc_zt=23&_nc_ht=scontent.fcrk1-5.fna&_nc_gid=EwGwn2xlB34vbxGFqBlpgg&oh=00_AfLgZEEgDo-EMaksRoZQu1hYPEekTzYEKxDh7xj1dFTvtg&oe=682BD57F" alt="Card 7">
    <div class="card-name">Funtanilla, Cyrell <br> Project Manager</div>
 
  </div>
</div>
<br><br><br><br>
</body>
</html>
