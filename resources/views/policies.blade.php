<!DOCTYPE html>
<html>
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
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- FontAwesome Script -->
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
  <script>
    function toggleMenu() {
      document.getElementById("myLinks").classList.toggle("hidden");
    }
  </script>
  <style>
    body {
      font-family: system-ui;
      color: rgba(255, 255, 255, 0.85);
      background-color: black;
      margin: 0;
    }
    .fa-bars {
         color: tan;
      }
    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: rgba(14, 13, 14, 0.60);
      max-width: 100%;
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
    
    hr {
      visibility: hidden;
    }
    
    /* Regulations Section */
    .regulations {
      max-width: 800px;
      margin: 40px auto;
      background-color: rgba(14, 13, 14, 0.60);
      color: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      text-align: center;
      border: double;
      border-color: #d6c273;
      background-color: rgba(14, 13, 14, 0.60);
    }
    
    .regulations h2 {
      font-size: 2.5rem;
      margin-bottom: 2em;
      color: #cab15c;
    }
    
    .regulations ul {
      list-style-type: disc;
      text-align: left;
      font-size: 1.3rem;
      line-height: 1.8;
      padding-left: 20px;
      margin: 0;
    }
    
    .regulations ul li {
      margin-bottom: 15px;
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
      
      .regulations {
        border: none;
        background-color: rgba(14, 13, 14, 0.60);
      }
      
      .book-now {
        font-size: 1.2rem;
        margin-top: 1rem;
      }
      
      .regulations {
        padding: 20px;
      }
      
      .regulations h2 {
        font-size: 2rem;
      }
      
      .regulations ul {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
  <header class="bg-opacity-60 bg-gray-900">
    <div class="flex justify-between items-center p-4">
      <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="w-20">
      <nav class="hidden md:flex space-x-6">
        <a href="{{ route('index') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Home</a>
        <a href="{{ route('treatments') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Treatments</a>
        <a href="{{ route('services') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Contraindications</a>
        <a href="{{ route('policies') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Clinic Regulations</a>
        <a href="{{ route('gallery') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Gallery</a>
      </nav>
      <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg" href="https://laalexiaatelier.booksy.com">Appointments</a>
      <button class="md:hidden text-[rgba(238,185,93,1)] text-2xl" onclick="toggleMenu()"><i class="fa fa-bars"></i></button>
    </div>
    <div id="myLinks" class="hidden flex flex-col md:hidden bg-gray-900 p-4 space-y-2">
      <a href="{{ route('index') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Home</a>
      <a href="{{ route('treatments') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Treatments</a>
      <a href="{{ route('services') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Contraindications</a>
      <a href="{{ route('policies') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Clinic Regulations</a>
      <a href="{{ route('gallery') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Gallery</a>
    </div>
  </header>
  <div class="regulations">
    <h2>Clinic Regulations</h2>
    <ul>
      <li>By subscribing for the treatment, you fully accept the regulations and the rules listed below.</li>
      <li>Clients before each treatment sign the consent for the procedure and take into account the side effects of the performed treatment.</li>
      <li>All clients for all needle procedures must be over 18 years old.</li>
      <li>£30-£50 secure deposit is required. Unless the operator requests otherwise.</li>
      <li>The Client has 24 hours from the moment of signing up to settle the deposit. If not done, the reservation is automatically canceled, and the date becomes available to other customers.</li>
      <li>If the treatment takes place, its price is reduced by the value of the deposit.</li>
      <li>The deposit can be settled by bank transfer: <strong>L ALEXIA ATELIER Ltd</strong>, Sort Code: <strong>20-59-43</strong>, Account: <strong>33814505</strong>.</li>
      <li>In the title of the transfer, enter your date and time of the visit. Failure to provide these details makes it impossible to guarantee availability of the booked date.</li>
      <li>When booking the date, ensure there are no Clinic Regulations for the procedure. If there are doubts about your health or medications, contact me immediately. Appearing at the appointment with an obvious contraindication results in the loss of the deposit.</li>
      <li>All consultation regarding skin condition, skin examination, pre-treatment, and after-treatment advice costs £35 for a 25-minute session. If the Client books an appointment and pays for the treatment in full after the consultation, the consultation is FREE.</li>
      <li>The customer has the right to change the date of the visit at least 48 hours before the planned visit. Last-minute cancellations result in a lost deposit. Multiple cancellations may lead to being added to the "Black List" and loss of the advance payment.</li>
    </ul>
  </div>
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>
</html>
