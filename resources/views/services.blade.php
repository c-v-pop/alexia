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
    h3 {
      margin-left: 2em;
    }
    .double-border {
      border: double;
      border-color: #d6c273;
      background-color: rgba(14, 13, 14, 0.60);
      max-width: 1024px;
      margin: 4em auto;
    }
    
    li {
      list-style: none;
      line-break: auto;
      margin: 7px 0px;
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
    footer {
      text-align: center;
      padding: 1rem;
      color: white;
      background-color: rgba(14, 13, 14, 0.60);
      max-width: 100%;
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
      .double-border {
        padding: 0.5em 1.5em;
        margin: 2em 0.5em;
        text-align: center;
        background-color: rgba(14, 13, 14, 0.60);
      }
      .double-border li {
        margin-bottom: 0.5em;
      }
      
      .nav-item a {
        font-size: 1rem;
      }
      
      .book-now {
        font-size: 1rem;
        margin-top: 1rem;
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
    <div>
      <div class="double-border">
  <h3>SEMI PERMANENT MAKE-UP</h3>
  <ul>
    <li>Sunbeds - <strong>2 WEEKS BEFORE THE TREATMENT!</strong></li>
    <li>Blood thinners and drugs.</li>
    <li>Acne medication (e.g., Izotek).</li>
    <li>Steroids (6 months after discontinuation).</li>
    <li>Psoriasis in the place where the procedure is performed (possibility of performing the procedure with taking responsibility for the risk; make-up durability is shorter in a person with diseased skin; much legal necessity to make a pigment).</li>
    <li>Diseases of the throat.</li>
    <li>Hyperfunction and hypofunction of the body (increased probability of pigment exfoliation).</li>
    <li>Unstable diabetes.</li>
    <li>Unregulated hypertension.</li>
    <li>Tendency to keloid scars.</li>
    <li>Blood clotting problems (e.g., hemophilia) - increased chance of pigment spillage.</li>
    <li>Epilepsy (possibility of triggering an epileptic seizure through stress).</li>
    <li>Inflammation of the skin in the place of pigmentation (bacterial, fungal, viral).</li>
    <li>Taking non-steroidal anti-inflammatory drugs (NSAIDs).</li>
    <li>Immunosuppression (inhibiting the process of healing).</li>
    <li>Heart and circulatory system diseases, thrombocytopenia, and anemia.</li>
    <li>Skin diseases: eczema, dermatophytosis, lichen planus, blush, keloids, urticaria, atopic dermatitis, and similar conditions.</li>
    <li>Pregnancy.</li>
    <li>Breastfeeding.</li>
    <li>HIV and hepatitis virus carrier.</li>
    <li>Skin allergy.</li>
    <li>Colds, flu, fevers, and taking antibiotics.</li>
    <li>Cancer under treatment.</li>
    <li>Treatments in the field of aesthetic medicine (about 2-4 weeks prior).</li>
    <li>Active cold sores.</li>
    <li>Excessive and unrealistic expectations of treatment outcomes.</li>
  </ul>
</div>

<div class="double-border">
  <h3>RUSSIAN LIPS MODELING </h3>
  <ul>
    <li>Pregnancy and breastfeeding.</li>
    <li>Age under 18.</li>
    <li>Diabetes (untreated).</li>
    <li>Acne common, rosacea.</li>
    <li>Use of isotretinol.</li>
    <li>Taking antibiotics (the procedure can be performed 2 weeks after the end of treatment).</li>
    <li>Active herpes/cold sores.</li>
    <li>Bacterial, viral, and fungal infections of the skin.</li>
    <li>Inflammations and purulent skin conditions.</li>
    <li>Keloid-prone autoimmune diseases.</li>
    <li>Blood clotting disorders.</li>
    <li>Cancers.</li>
    <li>Collagen diseases (e.g., rheumatoid arthritis, systemic lupus erythematosus, and systemic vasculitis).</li>
    <li>Epilepsy.</li>
    <li>Thyroid diseases (unregulated).</li>
    <li>Allergy to lidocaine.</li>
    <li>Hypersensitivity to hyaluronic acid.</li>
    <li>Unrealistic patient expectations.</li>
  </ul>
</div>
<div class="double-border">
  <h3>LIPS  DISSOLVING </h3>
  <ul>
    <li>Allergy to Hymenoptera insect venom</li>
    <li>Allergy to bovine and sheep protein</li>
    <li>Active herpes</li>
    <li>Are bacterial, viral or fungal infections</li>
  </ul>
</div>
<div class="double-border">
  <h3>ANTI - WRINKLE  INJECTIONS</h3>
  <ul>
    <li>Neuromuscular diseases, i.e. Myasthenia Gravis.</li>
    <li>Lambert-Eaton Syndrome.</li>
    <li>Pregnancy and breastfeeding (due to lack of scientific research).</li>
    <li>Active infection at the site of administration of the preparation.</li>
    <li>Taking certain medications that affect the metabolism of botulinum toxin (including aminoglycosides, cyclosporine, lincomycin, D-penicillamine, muscle relaxants, and others).</li>
    <li>Allergy to protein.</li>
    <li>Active herpes.</li>
  </ul>
</div>
<div class="double-border">
  <h3>SKIN NEEDLE MESOTHERAPY</h3>
  <ul>
    <li>The period of pregnancy and breastfeeding.</li>
    <li>Taking anticoagulants.</li>
    <li>Unregulated diabetes.</li>
    <li>Allergy.</li>
    <li>Skin inflammations and infections (herpes, wounds, etc.).</li>
    <li>Time of menstruation (increased sensitivity to pain).</li>
    <li>Cancers.</li>
    <li>Viral hepatitis.</li>
    <li>Epilepsy.</li>
    <li>Hypersensitivity to the ingredients of the applied preparations.</li>
    <li>Skin that does not tolerate injections well (including vascular skin and skin with a tendency to form keloids).</li>    
  </ul>
</div>
<div class="double-border">
  <h3>PDO / PLLA THREADS  LIFT</h3>
  <ul>
    <li>Allergies</li>
    <li>Active cancer or autoimmune diseases (including Hashimoto's)</li>
    <li>Active bacterial (including herpes), fungal, or viral infections</li>
    <li>Pregnancy and breast-feeding</li>
    <li>Mental illnesses, including personality disorders in patients</li>
    <li>Drugs that reduce blood clotting</li>
    <li>Epilepsy</li>
    <li>Unrealistic patient expectations</li>
    <li>Tendency to form keloids</li>
    <li>Inflammation of the skin, subcutaneous tissue, and mucous membranes</li>
  </ul>
</div>
<div class="double-border">
  <h3>RF MICRONEEDLING</h3>
  <ul>
    <li>Pregnancy and breastfeeding period</li>
    <li>Thyroid disease (unregulated)</li>
    <li>Diabetes</li>
    <li>Epilepsy</li>
    <li>Autoimmune diseases, incl. Graves' disease and Hashimoto's thyroiditis, multiple sclerosis (MS), myasthenia gravis, rheumatoid arthritis, scleroderma, Sjogren's syndrome, chronic fatigue syndrome, rheumatoid arthritis, vitiligo, psoriasis, alopecia areata, and others (careful with skin itching of unidentified origin, atopic dermatitis, allergies)</li>
    <li>Cancer diseases and the period up to 5 years after their completion, and systemic diseases</li>
    <li>Conditions after treatment with ionizing radiation</li>
    <li>Circulatory system diseases, e.g., thrombosis, hemophilia or temporary low blood coagulability, hypertension, varicose veins (at the site of the procedure)</li>
    <li>Blood diseases (anemia, thrombocytopenia)</li>
    <li>Taking anticoagulants, non-steroidal inflammatory drugs (e.g., Aspirin, Acard) even in the last few days before the procedure</li>
    <li>Acute inflammation of the skin, dermatological problems</li>
    <li>Sensory disorders, healing disorders</li>
    <li>Metal, silicone implants in the treatment area</li>
    <li>Pacemaker</li>
    <li>Tendency to internal bleeding, e.g., from the gastrointestinal tract</li>
    <li>Cataract</li>
    <li>Tendency to keloids, scarring</li>
    <li>Peripheral blood supply disorders</li>
    <li>Tuberculosis</li>
    <li>Caution recommended in case of hormonal disorders</li>
    <li>Viral hepatitis</li>
    <li>Implanted insulin pump</li>
    <li>Therapy with Roaccutan or its equivalents</li>
    <li>Rosacea, with vascular skin, use lower intensity and rather a fractional head</li>
    <li>Past treatments in the field of aesthetic medicine (fillers, botox, PDO threads, etc.)</li>
    <li>Local inflammations (viral and bacterial infections)</li>
    <li>People prone to herpes should use a prophylactic treatment, e.g., Heviran, 24 hours before the procedure</li>
    <li>Consuming alcohol before the procedure</li>
  </ul>
</div>
<div class="double-border">
  <h3>CARBOXYTHERAPY</h3>
  <ul>
    <li>Hemophilia, Willebrand's disease, healing disorders</li>
    <li>Advanced anemia</li>
    <li>Severe diseases of the lungs, heart, kidneys, immune system</li>
    <li>Epilepsy</li>
    <li>Cancers</li>
    <li>Glaucoma</li>
    <li>Bacterial infections</li>
    <li>Herpes in the II and III stages</li>
    <li>Active rosacea</li>
    <li>Cerebrovascular diseases</li>
    <li>Heart attack, angina</li>
    <li>Inflammation of the veins</li>
    <li>Using: anticoagulants, anti-inflammatory drugs, immunosuppressants, chemotherapy</li>
    <li>Aesthetic treatments (up to 3 weeks after the procedure)</li>
    <li>Carboxytherapy treatment is a contraindication for people: pregnant, breastfeeding, with local implants, with unstable blood pressure and diabetes</li>    
  </ul>
</div>
<div class="double-border">
  <h3>CLOSING  BLOOD CAPILARES</h3>
  <ul>
    <li>Pregnancy and breastfeeding</li>
    <li>Cancer diseases</li>
    <li>Pacemaker</li>
    <li>Metal parts in the body</li>
    <li>Insulin pump</li>
    <li>Tan</li>
    <li>Previously performed face care treatments (ask for details)</li>
  </ul>
</div>
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
</body>

</html>