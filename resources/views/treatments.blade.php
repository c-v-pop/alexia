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
      .double-border {
         display: flex;
         flex-direction: column;
         border: double;
         border-color: #d6c273;
         background-color: rgba(14, 13, 14, 0.60);
         max-width: 1024px;
         margin: 4em auto;
         text-align: center;
      }
      .double-border h3 {
         text-align: center;
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
      footer {
         text-align: center;
         padding: 1rem;
         color: white;
         background-color: rgba(14, 13, 14, 0.60);
         max-width: 100%;
      }
      .map-container {
         text-align: center;
         margin: 2rem auto;
         padding: 1.5rem;
         background-color: rgba(14, 13, 14, 0.60);
         color: white;
         border-radius: 0.5rem;
         max-width: 100%;
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
         max-width: 1024px;
         font-size: larger;
         margin: 5em auto;
         display: flex;
         flex-direction: column;
         background-color: rgba(14, 13, 14, 0.60);
      }
      /* Media Queries for Responsiveness */
      @media (max-width: 768px) {
         .hero_block {
            font-size: medium;
         }
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
         .nav-item a {
            font-size: 1rem;
         }
         .book-now {
            color: black;
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
         section {
            font-size: small;
         }
         
         .double-border {
            padding: 0.5em 1.5em;
            margin: 2em 0.5em;
            text-align: center;
            background-color: rgba(14, 13, 14, 0.60);
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
   <main>
      <div class="hero_block">
         <div class="flex-center">
            <section>
               <h2 class="text-center">Please feel FREE to book your consultation with me. <br> I am happy to help you and meet your expectations.</h2>
               <div class="service-category double-border">
                  <h3>Semi Permanent Make Up</h3>
                  <ul>
                     <li>Patch Test - Free (15min)</li>
                     <li>Ombre Powder Brows - £230.00 (3h)</li>
                     <li>Lips Blushing - £230.00 (3h)</li>
                     <li>Thickening of the Eyelash Line - £170.00 (2h)</li>
                     <li>Classic Eyeliner - £200.00 (3h)</li>
                     <li>Decorative Eyeliner - £230.00 (3h)</li>
                     <li>Shaded Eyeliner - £240.00 (3h)</li>
                     <li>TOP UP - up to 8 weeks - £50.00 (1h)</li>
                     <li>TOP UP - up to 12 months - £125.00 (1h)</li>
                  </ul>
               </div>
               <div class="service-category double-border">
                  <h3>Derma Fillers</h3>
                  <ul>
                     <li>Russian Lips Modeling 1.1ml - £200.00 (1h)</li>
                     <li>Wrinkle Filler 1.1ml - £170.00 (1h)</li>
                     <li>Chin Filler 1.1ml - £170.00 (1h)</li>
                     <li>Cheeks Filler 1.1ml - £170.00 (1h)</li>
                     <li>Cheeks Filler 2.2ml - £320.00 (1h)</li>
                     <li>Jaw Line 3.3ml - £470.00 (1h)</li>
                  </ul>
               </div>
               <div class="service-category double-border">
                  <h3>Lips Dissolving</h3>
                  <ul>
                     <li>Patch Test - Free (15min)</li>
                     <li>Lips Dissolving - £140.00 (30min)</li>
                     <li>Lips Dissolving Additional Session - £60.00 (30min)</li>
                  </ul>
               </div>
               <div class="service-category double-border">
                  <h3>Anti Wrinkle Injections</h3>
                  <ul>
                     <li>One Area - £140.00 (30min)</li>
                     <li>Two Areas - £180.00 (30min)</li>
                     <li>Three Areas - £220.00 (30min)</li>
                     <li>Four Areas - £240.00 (30min)</li>
                     <li>Bunny Lines - £120.00 (30min)</li>
                  </ul>
               </div>
               <div class="service-category double-border">
                  <h3>Aesthetics Treatments</h3>
                  <ul>
                     <li>Skin Needle Vitamins Mesotherapy - £100.00 (1h)</li>
                     <li>Tropocollagen Eyes - £90.00 (1h)</li>
                     <li>Tropocollagen Facial - £130.00 (1h)</li>
                     <li>Tropocollagen Facial + Neck - £180.00 (1h)</li>
                     <li>Pinky Glow - £110.00 (1h)</li>
                     <li>Meso BTX - £110.00 (1h)</li>
                     <li>PRP - Vampire Facial - £130.00 (1h)</li>
                     <li>PRP + PRF Facial - £190.00 (1h)</li>
                     <li>Lumi Eyes - £130.00 (1h)</li>
                     <li>Seventy Hyal Skin Booster - £160.00 (1h)</li>
                     <li>Ejal 40 - £180.00 (1h)</li>
                     <li>Profhilo Skin Booster - £220.00 (1h)</li>
                     <li>Sunekos - £220.00 (1h)</li>
                     <li>Juvelook Eyes - £200.00 (1h)</li>
                     <li>Juvelook Vial - £490.00 (1h)</li>
                     <li>Lenisna Vial - £490.00 (1h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>PDO/PLLA Threads Face Lift</h3>
                  <ul>
                     <li>10 Threads - £290.00 (1h)</li>
                     <li>20 Threads - £390.00 (1h)</li>
                     <li>30 Threads - £490.00 (1h)</li>
                     <li>2 BOMB Threads - £110.00 (1h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Fat Dissolving</h3>
                  <ul>
                     <li>Double Chin - £90.00 (30min)</li>
                     <li>Double Chin + Jawline - £120.00 (30min)</li>
                     <li>Body - Two Vials - £150.00 (30min)</li>
                     <li>Body - Three Vials - £210.00 (30min)</li>
                     <li>Body - Four Vials - £280.00 (30min)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>RF Fractional Microneedling</h3>
                  <ul>
                     <li>RF Microneedling One Session - £200.00 (1h)</li>
                     <li>RF Microneedling Three Sessions - £500.00 (1h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Skin Care Treatments</h3>
                  <ul>
                     <li>Facial Treatment + Consultation - £60.00+ (2h 20min)</li>
                     <li>Diamond Microdermabrasion - £50.00 (1h)</li>
                     <li>Ultrasonic Cavitation - £50.00 (1h)</li>
                     <li>Oxybrasion - £50.00 (1h)</li>
                     <li>Oxybrasion + Oxygen Infusion - £75.00 (1h 30min)</li>
                     <li>Anti-wrinkle Iron - £60.00 (1h)</li>
                     <li>Chemical Peel - £60.00 (1h 10min)</li>
                     <li>Medical Peel - £90.00 (1h 30min)</li>
                     <li>RF - £60.00 (1h)</li>
                     <li>Derma Pen - £70.00 (1h 30min)</li>
                     <li>Meso BB Glow - £75.00 (1h 30min)</li>
                     <li>Hydrafacial Basic - £80.00 (1h 30min)</li>
                     <li>Hydrafacial VIP - £120.00 (2h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Hair Loss Therapy</h3>
                  <ul>
                     <li>Ozon Therapy - £50.00 (30min)</li>
                     <li>Oxygen Therapy - £50.00 (30min)</li>
                     <li>Scalp Microneedling - £70.00 (30min)</li>
                     <li>Scalp Carboxytherapy - £100.00 (45min)</li>
                     <li>Scalp Needle Mesotherapy - £110.00 (45min)</li>
                     <li>PRP Scalp Mesotherapy - £130.00 (1h)</li>
                     <li>Hair Filler - £130.00 (1h)</li>
                     <li>6 Sessions Scalp Treatment - £520.00 (1h)</li>
                     <li>10 Sessions Scalp Treatment - £800.00 (1h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>IV Drip Vitamins Infusion</h3>
                  <ul>
                     <li>Vitamin C + Magnesium - £90.00 (1h 45min)</li>
                     <li>After Party - £130.00 (1h 45min)</li>
                     <li>Immunity Booster Infusion - £135.00 (1h 45min)</li>
                     <li>Energy Booster - £135.00 (1h 45min)</li>
                     <li>Hair & Beauty - £135.00 (1h 45min)</li>
                     <li>Detox & Losing Weight - £135.00 (1h 45min)</li>
                     <li>Athletic Sport Drip + Glutathione - £160.00 (1h 45min)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Carboxytherapy</h3>
                  <ul>
                     <li>Upper + Lower Eyelids - £90.00 (30min)</li>
                     <li>Scars / Stretchmarks - £80.00+ (30min)</li>
                     <li>Scalp - £100.00 (30min)</li>
                     <li>Face - £100.00 (30min)</li>
                     <li>Abdomen - £120.00 (30min)</li>
                     <li>Legs - £140.00 (30min)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Slimming / Anti-cellulite Body Treatment</h3>
                  <ul>
                     <li>Dermomassage - £50.00 (1h)</li>
                     <li>Anti-cellulite Iron - £60.00 (1h 30min)</li>
                     <li>Cavitation Fat Burn - £60.00 (1h 30min)</li>
                     <li>Carboxytherapy - £120.00+ (30min)</li>
                     <li>RF Microneedling - £220.00 (1h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Small Tattoo</h3>
                  <ul>
                     <li>Small Tattoo up to 7cm - £100.00+ (2h)</li>
                     <li>Small Tattoo up to 10cm - £150.00+ (3h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Laser Hair Removal</h3>
                  <ul>
                     <li>Patch Test - Free (15min)</li>
                     <li>Between Eyebrows - 1 session - £20.00 (20min)</li>
                     <li>Between Eyebrows - 6 sessions - £100.00 (20min)</li>
                     <li>Cheeks - 1 session - £30.00 (20min)</li>
                     <li>Cheeks - 6 sessions - £140.00 (20min)</li>
                     <li>Upper Lip - 1 session - £30.00 (20min)</li>
                     <li>Upper Lip - 6 sessions - £140.00 (20min)</li>
                     <li>Lower Lip - 1 session - £25.00 (20min)</li>
                     <li>Lower Lip - 6 sessions - £120.00 (20min)</li>
                     <li>Full Face - 1 session - £90.00 (30min)</li>
                     <li>Full Face - 6 sessions - £440.00 (30min)</li>
                     <li>Nipple Area - 1 session - £40.00 (20min)</li>
                     <li>Nipple Area - 6 sessions - £190.00 (30min)</li>
                     <li>Underarm - 1 session - £50.00 (20min)</li>
                     <li>Underarm - 6 sessions - £210.00 (20min)</li>
                     <li>Half Arm - 1 session - £70.00 (30min)</li>
                     <li>Half Arm - 6 sessions - £380.00 (30min)</li>
                     <li>Full Arm - 1 session - £120.00 (30min)</li>
                     <li>Full Arm - 6 sessions - £570.00 (30min)</li>
                     <li>Full Back - 1 session - £120.00 (30min)</li>
                     <li>Full Back - 6 sessions - £570.00 (30min)</li>
                     <li>Full Stomach - 1 session - £100.00 (30min)</li>
                     <li>Full Stomach - 6 sessions - £500.00 (30min)</li>
                     <li>Bikini Line - 1 session - £60.00 (30min)</li>
                     <li>Bikini Line - 6 sessions - £280.00 (30min)</li>
                     <li>Hollywood Bikini - 1 session - £90.00 (30min)</li>
                     <li>Hollywood Bikini - 6 sessions - £420.00 (30min)</li>
                     <li>Lower Leg - 1 session - £80.00 (30min)</li>
                     <li>Lower Leg - 6 sessions - £400.00 (30min)</li>
                     <li>Full Legs - 1 session - £140.00 (1h)</li>
                     <li>Full Legs - 6 sessions - £700.00 (1h)</li>
                     <li>Full Body - 1 session - £350.00 (2h)</li>
                     <li>Full Body - 6 sessions - £1,700.00 (2h)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>PMU & Small Tattoo Saline Removal</h3>
                  <ul>
                     <li>Patch Test - Free (10min)</li>
                     <li>1 Session - £60.00 (30min)</li>
                     <li>3 Sessions - £150.00 (30min)</li>
                  </ul>
               </div>
               <div class="service-category double-border">
                  <h3>Skin Tags / Red Facial Veins Removal</h3>
                  <ul>
                     <li>15-Minute Session - £60.00 (25min)</li>
                     <li>30-Minute Session - £100.00 (40min)</li>
                     <li>60-Minute Session - £150.00 (1h 15min)</li>
                  </ul>
               </div>
               
               <div class="service-category double-border">
                  <h3>Lash Lift / Eyebrows Lamination</h3>
                  <ul>
                     <li>Lash Lift - £35.00 (1h)</li>
                     <li>Eyebrows Lamination - £35.00 (1h)</li>
                  </ul>
               </div>
               
               <!-- Repeat similar structure for other categories -->
            </section>
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