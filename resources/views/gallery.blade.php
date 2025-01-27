<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Meta Tags for SEO -->
  <meta name="description" content="L'Alexia Atelier offers personalized permanent makeup and aesthetics treatments in Darlington, UK. Enhance your natural beauty with expert care.">
  <meta name="keywords" content="permanent makeup, aesthetics salon, beauty treatments, Darlington, eyeliner tattoos, eyebrow tattoos, lip blush, skin care, beauty expert">
  <meta name="author" content="L'Alexia Atelier">
  <!-- Open Graph Meta Tags for Social Media -->
  <meta property="og:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
  <meta property="og:description" content="Enhance your beauty with expert permanent makeup and aesthetics treatments at L'Alexia Atelier in Darlington, UK. Book your consultation today.">
  <meta property="og:image" content="https://example.com/path-to-image.jpg">
  <!-- Replace with actual image -->
  <meta property="og:url" content="https://yourwebsite.com">
  <meta property="og:type" content="website">
  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
  <meta name="twitter:description" content="Personalized permanent makeup and aesthetics treatments in Darlington, UK. Book for a consultation at L'Alexia Atelier.">
  <meta name="twitter:image" content="https://example.com/path-to-image.jpg">
  <!-- Replace with actual image -->
  <meta name="twitter:card" content="summary_large_image">
  <!-- Favicon -->
  <link rel="icon" href="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.png" type="image/png">
  <title>L'Alexia Atelier - Permanent Makeup & Aesthetics Salon</title>
  <!-- Style -->
  <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin="anonymous">
  <link rel="dns-prefetch" href="https://kit.fontawesome.com">
  <!-- FontAwesome Script -->
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
  <script>
     function myFunction() {
       var x = document.getElementById("myLinks");
       if (x.style.display === "block") {
         x.style.display = "none";
       } else {
         x.style.display = "block";
       }
     }
   </script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap">
  
  <!-- Style -->
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
  
  <style>
   body {
      font-family: system-ui;
      color: rgba(255, 255, 255, 0.85);
      background-color: black;
      margin: 0;
    }
    
    hr {
      visibility: hidden;
    }
    header {
      padding: 0;
    }
    .topnav {
      display: flex;
      background-color: rgba(14, 13, 14, 0.60);
      position: relative;
    }
    
    .topnav #myLinks {
    list-style: none;
    display: flex;
    width: 100%;
    align-items: center;
    margin-right: 1em;
    }
    
    .topnav a {
      color: white;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      display: block;
    }
    
    .topnav a.icon {
      display: none;
      position: absolute;
    }
    .logo {
      width: 10%;
      object-fit: cover;
    }
    
    .topnav a:hover {
      background-color: rgba(14, 13, 14, 0.60);
      color: white;
    }
    .nav-item a {
      font-size: 1.25rem;
      text-decoration: none;
      color: transparent;
      /* Hide the default text color */
      background: linear-gradient(90deg, #cab15c, #e8de9c, #d6c273);
      -webkit-background-clip: text;
      background-clip: text;
      transition: color 0.3s, text-shadow 0.3s;
    }
    
    .nav-item a:hover {
      text-decoration: underline;
      color: transparent;
      background: linear-gradient(90deg, #e8de9c, #d6c273, #cab15c);
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 0px 1px #e8de9c;
      /* Layers of glow for a neon effect */
      opacity: 95%;
    }
    
    .book-now {
      background: rgb(238, 185, 93);
      background: linear-gradient(145deg, rgba(238, 185, 93, 0.8603816526610644) 25%, rgba(242, 237, 207, 1) 52%, rgba(238, 185, 93, 1) 77%);
      color: black;
      opacity: 85%;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      font-family: serif;
      text-decoration: none;
      font-size: 2rem;
    }
    
    .book-now:hover {
      opacity: 100%;
      transition: opacity 0.3s ease;
    }
    
    .content {
      margin: 2rem auto;
      max-width: 90%;
      min-height: 70vh;
      text-align: center;
      padding: 1.5rem;
      background-color: rgba(14, 13, 14, 0.60);
      color: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      max-width: 1450px;
      display: flex;
      gap: 4em;
      justify-content: space-between;
      align-items: center;
      line-height: 1.8;
    }
    
    .content img {
      width: 400px;
      /* Set explicit width */
      height: 600px;
      /* Set explicit height */
      object-fit: cover;
      /* Ensure no distortion */
      border-radius: 10px;
      /* Optional styling */
    }
    
    .content p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }
    
    .gallery {
      min-height: 80vh;
      max-width: 1450px;
      display: flex;
    }
    
    .gallery img {
      width: 400px;
      /* Adjust the width as needed */
      height: 400px;
      /* Adjust the height as needed */
      object-fit: cover;
      /* Ensures images are cropped to fit without distortion */
      border-radius: 10px;
      /* Optional: gives a rounded corner effect */
      margin: 5px;
      /* Adds space between images */
      transition: transform 0.3s ease;
      /* Adds a hover effect */
    }
    
    .gallery-content {
      background-color: rgba(14, 13, 14, 0.60);
      max-width: 1450px;
      margin: 3em auto;
      padding-bottom: 3em;
    }
    
    .gallery-content h2 {
      padding-top: 1em;
      font-size: xx-large;
    }
    
    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: rgba(14, 13, 14, 0.60);
    }
    
    .text-center {
      text-align: center;
    }
    
    .map-container {
      text-align: center;
      margin: 2rem auto;
      padding: 1.5rem;
      background-color: rgba(14, 13, 14, 0.60);
      color: white;
      border-radius: 0.5rem;
      max-width: 1450px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .map-container p {
      font-size: 1.25rem;
      margin: 1.5rem 0;
      color: rgba(255, 255, 255, 0.85);
    }
    
    .map-container a {
      text-decoration: none;
      color: white;
    }
    
    .map-container a:hover {
      text-decoration: underline;
      color: transparent;
      background: linear-gradient(90deg, #e8de9c, #d6c273, #cab15c);
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 0px 1px #e8de9c;
      opacity: 95%;
    }
    
    
    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      header {
        padding: 0;
      }
      .topnav {
        display: block;
        overflow: hidden;
        background-color: rgba(14, 13, 14, 0.60);
        position: relative;
      }
      
      .topnav #myLinks {
        display: none;
        list-style: none;
      }
      
      .topnav a {
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
      }
      
      .topnav a.icon {
        background: rgba(14, 13, 14, 0.60);
        display: block;
        position: absolute;
        right: 0;
        top: 0;
      }
      
      .topnav a:hover {
        background-color: rgba(14, 13, 14, 0.60);
        color: white;
      }
      .logo {
        width: 12%;
        min-height: 100%;
      }
      hr {
        visibility: visible;
        width: 100%;
        border-color: #cab15c;
        margin: 0px;
        padding: 0px;
      }
      
      .nav-item a {
        font-size: 1rem;
      }
      
      .book-now {
        font-size: 1rem;
      }
      
      .content h2 {
        font-size: 1.6rem;
      }
      
      .content p {
        font-size: 1rem;
      }
      
      .content {
        display: flex;
        flex-direction: column;
      }
      
      .gallery {
        display: flex;
        flex-direction: column;
        /* Switch to column layout */
        align-items: center;
        margin: auto;
        width: 90%;
      }
      
      .gallery img {
        width: 100%;
        height: 100%;
      }
      
      .content img {
        width: 100%;
        height: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="topnav">
      <div class="logo-container">
        <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="logo">
      </div>
      <div id="myLinks">
        <p class="nav-item"><a href="{{ route('index') }}">Home</a></p>
        <hr>
        <p class="nav-item"><a href="{{ route('treatments') }}">Treatments and Pricelist</a></p>
        <hr>
        <p class="nav-item"><a href="{{ route('services') }}">Contraindications</a></p>
        <hr>
        <p class="nav-item"><a href="{{ route('policies') }}">Clinic Regulations</a></p>
        <hr>
        <p class="nav-item"><a href="{{ route('gallery') }}">Gallery</a></p>
        <hr>
        <p><a class="book-now" href="https://laalexiaatelier.booksy.com">Appointments</a></p>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>
  
  <main>
    <div class="content">
      <div>
        <h2>Gallery of Transformations</h2>
        <p>Explore our curated gallery showcasing the artistry and precision of our treatments. Each photo captures the confidence and beauty our clients gain through personalized care.</p>
        <p></p>
        <section class="gallery">
          <div class="gallery-content">
            <h2 class="text-center gallery-title">Gallery</h2>
            <section class="gallery">
              <div class="text-center">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/lips.webp" alt="Client Work 3">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/eyebrows.webp" alt="Client Work 3">
              </div>
              <div class="text-center">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/scar.webp" alt="Client Work 3">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/wrinkles.webp" alt="Client Work 3">
              </div>
              <div class="text-center">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/wrinkles_2.webp" alt="Client Work 3">
                <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/russian_lips2.webp" alt="Client Work 3">
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <div class="map-container">
      <h2>Find Us</h2>
      <p>Visit us at:</p>
      <p><strong>12 Gilling Cres, Darlington DL1 4TH</strong></p>
      <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
    </div>
    <footer>
      <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
    </footer>
  </body>
  
  </html>