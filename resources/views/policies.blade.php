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
  <style>
    body {
      font-family: system-ui;
      color: rgba(255, 255, 255, 0.85);
      background-color: black;
      margin: 0;
    }
    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: rgba(14, 13, 14, 0.60);
      max-width: 100%;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 1em;
      flex-wrap: wrap;
      background-color: rgba(14, 13, 14, 0.60);
    }
    
    .nav-item a {
      font-size: 2rem;
      text-decoration: none;
      color: transparent;
      background: linear-gradient(90deg, #cab15c, #e8de9c, #d6c273);
      -webkit-background-clip: text;
      background-clip: text;
      transition: color 0.3s, text-shadow 0.3s;
    }
    
    .nav-item a:hover {
      text-decoration: underline;
      background: linear-gradient(90deg, #e8de9c, #d6c273, #cab15c);
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 0px 1px #e8de9c;
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
  
  <header>
    <div class="topnav">
      <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="logo">
      <div id="myLinks">
        <li class="nav-item"><a href="{{ route('index') }}">Home</a></li>
        <hr>
        <li class="nav-item"><a href="{{ route('treatments') }}">Treatments and Pricelist</a></li>
        <hr>
        <li class="nav-item"><a href="{{ route('services') }}">Contraindications</a></li>
        <hr>
        <li class="nav-item"><a href="{{ route('policies') }}">Clinic Regulations</a></li>
        <hr>
        <li class="nav-item"><a href="{{ route('gallery') }}">Gallery</a></li>
        <hr>
        <li><a class="book-now" href="https://laalexiaatelier.booksy.com">Appointments</a></li>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
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
