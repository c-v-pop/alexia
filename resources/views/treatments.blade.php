<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
  <meta property="og:image" content="https://example.com/path-to-image.jpg"> <!-- Replace with actual image -->
  <meta property="og:url" content="https://yourwebsite.com">
  <meta property="og:type" content="website">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
  <meta name="twitter:description" content="Personalized permanent makeup and aesthetics treatments in Darlington, UK. Book for a consultation at L'Alexia Atelier.">
  <meta name="twitter:image" content="https://example.com/path-to-image.jpg"> <!-- Replace with actual image -->
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicon -->
  <link rel="icon" href="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.png" type="image/png">
  <title>L'Alexia Atelier - Permanent Makeup & Aesthetics Salon</title>

  <!-- Style -->
  <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin="anonymous">
  <link rel="dns-prefetch" href="https://kit.fontawesome.com">

  <!-- FontAwesome Script -->
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: "Figtree", sans-serif;
      color: rgba(255, 255, 255, 0.85);
      background-color: black;
      margin: 0;
    }
    li {
      list-style: none;
      margin: 0.3em 0em;
    }

    .flex-center {
      display: flex;
      justify-content: center;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 1em;
      flex-wrap: wrap;
      background-color: black;
    }

    .header-logo img {
      height: 8rem;
      max-width: 100%;
    }

    .nav-list {
      display: flex;
      gap: 1rem;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav-item a {
      font-size: 2rem;
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
      color: rgb(97, 29, 223);
    }

    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: black;
    }
    .map-container {
      text-align: center;
      margin: 2rem auto;
      padding: 1.5rem;
      background-color: rgba(0, 0, 0, 0.8);
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
    hr {
        visibility: hidden;
    }
    .hero_block {
      font-size: larger;
      margin: 5em auto;
      display: flex;
      flex-direction: column;
    }
    .styled-border {
      border: solid;
      border-color: rgb(238, 185, 93);
      padding: 1em
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: center;
        background-color: transparent;
      }
      .styled-border {
      border: dotted;
      padding: 1em;
      margin: 1em 1em;
      border-color: rgb(238, 185, 93);
    }
      .hero_block {
        font-size: medium;
      }
      hr {
        visibility: visible;
        width: 80%;
        border-color: #cab15c;
        margin: 0px;
        padding: 0px;
      }

      .nav-list {
        flex-direction: column;
        align-items: center;
      }

      .nav-item a {
        font-size: 1rem;
      }

      .book-now {
        font-size: 1rem;
        margin-top: 1rem;
      }
      .flex-center {
        flex-direction: column;
        text-align: center;
        margin: auto;
      }
      ul {
        margin: 0px;
        padding: 0px;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="header-logo">
      <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo">
    </div>
    <ul class="nav-list">
      <li class="nav-item"><a href="{{ route('index') }}">Home</a></li>
      <hr>
      <li class="nav-item"><a href="{{ route('treatments') }}">Treatments and Offers</a></li>
      <hr>
      <li class="nav-item"><a href="{{ route('pricelist') }}">Pricelist</a></li>
      <hr>
      <li class="nav-item"><a href="{{ route('services') }}">Services</a></li>
      <hr>
      <li class="nav-item"><a href="{{ route('policies') }}">Info & Policies</a></li>
      <hr>
      <li class="nav-item"><a href="{{ route('gallery') }}">Gallery</a></li>
      <hr>
      <li><a class="book-now" href="https://laalexiaatelier.booksy.com">Appointments</a></li>
    </ul>
  </header>
  <main>
    <div class="hero_block">
      <div class="flex-center">
        <ul class="styled-border">
          <h3>Advanced Aesthetic Treatments</h3>
          <li>PDO threads</li>
          <li>Anti-wrinkle injections</li>
          <li>Lips Modeling</li>
          <li>Wrinkle filling</li>
          <li>Platelet Rich Plasma & Fibrin</li>
          <li>Skin Needle Mesotherapy</li>
          <li>Fat Dissolving</li>
          <li>Skin Tissue Stimulators</li>
        </ul>
        <ul class="styled-border">
          <h3>Body Treatments</h3>
          <li>Anti-cellulite treatments</li>
          <li>Slimming treatments</li>
          <li>Individual scars & marks therapy</li>
          <li>Carboxytherapy</li>
          <li>Micropuncture</li>
          <li>Dermomassage</li>
          <li>Body wrapping</li>
        </ul>
        <ul class="styled-border">
          <h3>Semi Permanent Make Up</h3>
          <li>Ombre Powder Brows</li>
          <li>Lips</li>
          <li>Eyeliner</li>
        </ul>
        <ul class="styled-border">
          <h3>IV Vitamins Drip Therapy</h3>
        </ul>
        <ul class="styled-border">
          <h3>RF Microneedling</h3>
        </ul>   
      </div>
      <div class="flex-center">
        <ul class="styled-border">
          <h3>Professional Skin Care</h3>
          <li>Facial Treatments for all skin types</li>
          <li>Individual Therapy for problematic skin</li>
          <li>Micro-Needle skin Mesotherapy</li>
          <li>No-Needle Mesotherapy</li>
          <li>Closing the Blood Vessels</li>
          <li>Original Hydrafacial</li>
          <li>Oxygen Infusion</li>
          <li>Oxyabrasion</li>
          <li>Diamond Microdermabrasion</li>
          <li>Ultrasonic</li>
          <li>RF</li>
          <li>Cavitation</li>
          <li>Chemical peels</li>
        </ul>
        <ul class="styled-border">
          <h3>Eye Beauty Treatments</h3>
          <li>HD Brows</li>
          <li>Lash Lift</li>
          <li>Brows Lamination</li>
          <li>Under the Eye Therapy</li>
        </ul>
        <ul class="styled-border">
          <h3>Pregnant & Postpartum Care</h3>
          <li>Facial & Body Treatments</li>
        </ul>
        <ul class="styled-border">
          <h3>Scalp & Hair Loss Therapy</h3>
        </ul>
      <ul class="styled-border">
        <h3>Carboxytherapy</h3>
      </ul>
    </div>
    </div>
  </main>
  <div class="map-container">
    <h3>Find Us</h3>
    <p>Visit us at:</p>
    <p><strong>12A Gilling Cres, Darlington DL1 4TH</strong></p>
    <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
  </div>
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>

</html>