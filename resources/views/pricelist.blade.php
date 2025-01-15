<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>L'Alexia Atelier - Permanent Makeup & Aesthetics Salon</title>

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
  <link rel="icon" href="https://example.com/favicon.ico" type="image/x-icon">
  <title>L'Alexia Atelier</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap">

  <!-- Style -->
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>

  <style>
 body {
      font-family: "Figtree", sans-serif;
      color: rgba(255, 255, 255, 0.85);
      background-color: black;
      margin: 0;
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
    .prices {
      text-align: center;
    }
    .prices li {
      list-style-type: none;
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

    .services {
      display: flex;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      justify-content: space-between;
      list-style-type: none;
      padding: 1.25em;
      max-width: 1400px;
      margin: auto;
    }

    .services li {
      text-decoration: none;
      line-height: 1.8;
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
      padding: 1em 0em;
      margin: 2rem auto;
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
    
    .services-navbar {
      display: flex;
      justify-content: center;
      margin: auto;
  overflow: hidden;
  background-color: black; 
}

.services-navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.services-navbar a:hover, .subnav:hover .subnavbtn {
  text-decoration: underline;
      color: transparent;
      background: linear-gradient(90deg, #e8de9c, #d6c273, #cab15c);
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 0px 1px #e8de9c;
      /* Layers of glow for a neon effect */
      opacity: 95%;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: black;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  text-decoration: underline;
      color: transparent;
      background: linear-gradient(90deg, #e8de9c, #d6c273, #cab15c);
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 0px 1px #e8de9c;
      /* Layers of glow for a neon effect */
      opacity: 95%;
}

.subnav:hover .subnav-content {
  display: block;
}

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: center;
        background-color: transparent;
      }

      .nav-list {
        flex-direction: column;
        align-items: center;
        gap: 2rem;
      }

      .nav-item a {
        font-size: 1rem;
      }
      .prices {
      text-align: center;
    }

      .book-now {
        font-size: 1rem;
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
      .services {
          display: flex;
          flex-direction: column;
          text-align: center;
      }
    }
  </style>
  </style>
</head>

<body class="font-sans bg-gray-100">
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

  <div class="space-y-6 prices">
    <!-- Consultation Section -->
    <div>
        <h2 class="text-lg font-bold">Consultation</h2>
        <ul class="space-y-4">
            <li>
                <div class="flex justify-between items-center">
                    <span>Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;30.00</span>
                        <span class="font-bold text-green-600">&pound;25.50</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 30min</p>
            </li>
        </ul>
    </div>

    <!-- Semi Permanent Make Up Section -->
    <div>
        <h2 class="text-lg font-bold">Semi Permanent Make Up</h2>
        <ul class="space-y-4">
            <li>
                <div class="flex justify-between items-center">
                    <span>Ombre Powder Brows - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;230.00</span>
                        <span class="font-bold text-green-600">&pound;195.50</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 3h</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Lips Blushing - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;230.00</span>
                        <span class="font-bold text-green-600">&pound;195.50</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 3h</p>
            </li>
        </ul>
    </div>

    <!-- Derma Fillers Section -->
    <div>
        <h2 class="text-lg font-bold">Derma Fillers</h2>
        <ul class="space-y-4">
            <li>
                <div class="flex justify-between items-center">
                    <span>Russian Lips Modeling 1.1ml - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;200.00</span>
                        <span class="font-bold text-green-600">&pound;170.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 1h</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Smile/Marionette Lines 1ml - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;200.00</span>
                        <span class="font-bold text-green-600">&pound;170.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 1h</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Cheeks Augmentation 1ml - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;200.00</span>
                        <span class="font-bold text-green-600">&pound;170.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 1h</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Jawline Contouring 1ml - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;200.00</span>
                        <span class="font-bold text-green-600">&pound;170.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 1h</p>
            </li>
        </ul>
    </div>

    <!-- Anti Wrinkle Injections Section -->
    <div>
        <h2 class="text-lg font-bold">Anti Wrinkle Injections</h2>
        <ul class="space-y-4">
            <li>
                <div class="flex justify-between items-center">
                    <span>One Area - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;140.00</span>
                        <span class="font-bold text-green-600">&pound;119.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 30min</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Two Areas - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;180.00</span>
                        <span class="font-bold text-green-600">&pound;153.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 30min</p>
            </li>
            <li>
                <div class="flex justify-between items-center">
                    <span>Three Areas - Save up to 15%</span>
                    <div>
                        <span class="line-through text-gray-500">&pound;220.00</span>
                        <span class="font-bold text-green-600">&pound;187.00</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">Duration: 30min</p>
            </li>
        </ul>
    </div>

    <!-- Additional Categories -->
    <!-- Example structure for other services can be continued similarly -->
</div>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>

</html>