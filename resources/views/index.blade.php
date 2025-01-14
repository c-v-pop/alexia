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

    #background {
      position: fixed;
      inset: 0;
      z-index: -10;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.4;
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

    .about-me-section {
      color: white;
      padding: 2rem 1rem;
      border-radius: 0.5rem;
      max-width: 1450px;
      margin: 2rem auto;
      line-height: 1.8;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .about-me-section h2 {
      text-align: center;
      /* Center align only the h2 */
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .about-me-section p {
      font-size: 1.25rem;
      margin: 0.5rem 0;
      text-align: left;
      /* Align p tags to the left */
      text-decoration: none;
      /* Ensures no text decoration */
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
      background-color: rgba(0, 0, 0, 0.8);
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

    .content h1 {
      font-size: 2.5rem;
      font-weight: bold;
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
      background-color: rgba(0, 0, 0, 0.8);
      max-width: 1450px;
      margin: 3em auto;
      padding-bottom: 3em;
    }

    .gallery-content a {
      color: white;
      text-decoration: none;
      font-size: x-large;
    }

    .gallery-content h2 {
      padding-top: 1em;
      font-size: xx-large;
    }

    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: black;
    }

    .text-center {
      text-align: center;
    }
    .text-center a:hover {
      cursor: pointer;
      text-decoration: none;
      color: transparent;
      /* Hide the default text color */
      background: linear-gradient(90deg, #cab15c, #e8de9c, #d6c273);
      -webkit-background-clip: text;
      background-clip: text;
      transition: color 0.3s, text-shadow 0.3s;
    }
    .hover-color {
      cursor: pointer;
      text-decoration: none;
      color: transparent;
      /* Hide the default text color */
      background: linear-gradient(90deg, #cab15c, #e8de9c, #d6c273);
      -webkit-background-clip: text;
      background-clip: text;
      transition: color 0.3s, text-shadow 0.3s;
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

    .flex-end {
      display: flex;
      justify-content: flex-end;
    }
    hr {
        visibility: hidden;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: center;
        background-color: transparent;
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

      .content h1 {
        font-size: 1.8rem;
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
      .column-reverse {
        display: flex;
        flex-direction: column-reverse;
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
    <div class="content">

      <div class="column-reverse">
        <h1>Welcome to Permanent Makeup & Aesthetics</h1>
        <p>Specializing in personalized treatments for beauty enhancement.</p>
        <p>
          When it comes to your appearance, you deserve the best care that money can buy.
          Welcome to <span style="font-weight: bold; font-style: italic;">Permanent Make-Up Institute</span>,
          the number one Skin Expert in cosmetology and aesthetics treatments in the North Yorkshire & Durhamshire area.
        </p>
        <p>Give us a call today and book a complimentary consultation meeting.</p>
      </div>
      <div class="flex-end">
        <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/alexia_2.webp" alt="Woman with syringe">
      </div>
    </div>
    <div class="content column-reverse">
      <section class="about-me-section">
        <h2>&#119808;&#119809;&#119822;&#119828;&#119827; &#119820;&#119812; &#128420;</h2>
        <p>&#129392;.
          Thank you for your trust and support &#129782;.
        </p>
        <p></p>
        <p>
          <strong>15 years of experience:</strong> I am a University graduate, accredited Aesthetic Medicine Practitioner,
          and Laser Hair Removal Specialist.
        </p>
        <p>
          <strong>Award-winning:</strong> Multiple <i>British Hair and Beauty Awards</i>, including Gold Winner for
          Semi-Permanent Makeup and Aesthetic Salon of the Year &#127942;.
        </p>
        <p>
          <strong>Published:</strong> Featured in *Leaders* magazine with a 3-page interview.
        </p>
        <p>
          <strong>Artistic roots:</strong> I love creating art and have exhibited my paintings in Hartlepool.
        </p>
        <p>
          <strong>Darlington-based</strong>
        </p>
    </div>
    </section>
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
        <h2 class="text-center"><a href="{{ route('gallery') }}">View More...</a></h2>

    </div>
  </main>
  <div class="map-container">
    <h2>Find Us</h2>
    <p>Visit us at:</p>
    <p><strong>12A Gilling Cres, Darlington DL1 4TH</strong></p>
    <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
  </div>
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
  <p>add tailwind back</p>
</body>

</html>