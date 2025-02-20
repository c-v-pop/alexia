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
</head>
<body class="text-[rgba(238,185,93,1)] bg-black m-0 p-0">
  <header class="bg-black/95">
    <div class="flex justify-between items-center p-4">
      <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="w-40">
      <nav class="hidden md:flex space-x-6">
        <a href="{{ route('index') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Home</a>
        <a href="{{ route('treatments') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Treatments</a>
        <a href="{{ route('services') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Contraindications</a>
        <a href="{{ route('policies') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Clinic Regulations</a>
        <a href="{{ route('gallery') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Gallery</a>
        <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg" href="https://laalexiaatelier.booksy.com">Appointments</a>
      </nav>
      <button class="md:hidden text-[rgba(238,185,93,1)] text-2xl" onclick="toggleMenu()"><i class="fa fa-bars"></i></button>
    </div>
    <div id="myLinks" class="hidden flex flex-col md:hidden p-4 space-y-2 items-start">
      <a href="{{ route('index') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Home</a>
      <hr class="border border-[rgba(238,185,93,0.86)]  w-full block md:hidden">
      <a href="{{ route('treatments') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Treatments</a>
      <hr class="border border-[rgba(238,185,93,0.86)]  w-full block md:hidden">
      <a href="{{ route('services') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Contraindications</a>
      <hr class="border border-[rgba(238,185,93,0.86)]  w-full block md:hidden">
      <a href="{{ route('policies') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Clinic Regulations</a>
      <hr class="border border-[rgba(238,185,93,0.86)]  w-full block md:hidden">
      <a href="{{ route('gallery') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Gallery</a>
      <hr class="border border-[rgba(238,185,93,0.86)]  w-full block md:hidden">
      <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg text-center m-auto" href="https://laalexiaatelier.booksy.com">Appointments</a>
    </div>    
  </header>

  @php
  $treatments = [
      [
          'title' => 'CONTRAINDICATIONS',
          'items' => [
              'Sunbeds - <strong>2 WEEKS BEFORE THE TREATMENT!</strong>',
              'Blood thinners and drugs.',
              'Acne medication (e.g., Izotek).',
              'Steroids (6 months after discontinuation).',
              'Psoriasis in the place where the procedure is performed (possibility of performing the procedure with taking responsibility for the risk; make-up durability is shorter in a person with diseased skin; much legal necessity to make a pigment).',
              'Diseases of the throat.',
              'Hyperfunction and hypofunction of the body (increased probability of pigment exfoliation).',
              'Unstable diabetes.',
              'Unregulated hypertension.',
              'Tendency to keloid scars.',
              'Blood clotting problems (e.g., hemophilia) - increased chance of pigment spillage.',
              'Epilepsy (possibility of triggering an epileptic seizure through stress).',
              'Inflammation of the skin in the place of pigmentation (bacterial, fungal, viral).',
              'Taking non-steroidal anti-inflammatory drugs (NSAIDs).',
              'Immunosuppression (inhibiting the process of healing).',
              'Heart and circulatory system diseases, thrombocytopenia, and anemia.',
              'Skin diseases: eczema, dermatophytosis, lichen planus, blush, keloids, urticaria, atopic dermatitis, and similar conditions.',
              'Pregnancy.',
              'Breastfeeding.',
              'HIV and hepatitis virus carrier.',
              'Skin allergy.',
              'Colds, flu, fevers, and taking antibiotics.',
              'Cancer under treatment.',
              'Treatments in the field of aesthetic medicine (about 2-4 weeks prior).',
              'Active cold sores.',
              'Excessive and unrealistic expectations of treatment outcomes.',
          ]
      ],
      [
          'title' => 'RUSSIAN LIPS MODELING',
          'items' => [
              'Pregnancy and breastfeeding.',
              'Age under 18.',
              'Diabetes (untreated).',
              'Acne common, rosacea.',
              'Use of isotretinol.',
              'Taking antibiotics (the procedure can be performed 2 weeks after the end of treatment).',
              'Active herpes/cold sores.',
              'Bacterial, viral, and fungal infections of the skin.',
              'Inflammations and purulent skin conditions.',
              'Keloid-prone autoimmune diseases.',
              'Blood clotting disorders.',
              'Cancers.',
              'Collagen diseases (e.g., rheumatoid arthritis, systemic lupus erythematosus, and systemic vasculitis).',
              'Epilepsy.',
              'Thyroid diseases (unregulated).',
              'Allergy to lidocaine.',
              'Hypersensitivity to hyaluronic acid.',
              'Unrealistic patient expectations.',
          ]
      ]
  ];
@endphp

<main class="p-4 sm:p-6 lg:p-8">
  <div class="space-y-8">
      <div>
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4">SEMI PERMANENT MAKE-UP</h3>
          <div class="space-y-6">
              @foreach ($treatments as $treatment)
                  <div>
                      <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mb-3">
                          {{ $treatment['title'] }}
                      </h3>
                      <ul class="list-disc pl-5 space-y-2 border-b border-[#D4AF37] pb-6">
                          @foreach ($treatment['items'] as $item)
                              <li>{!! $item !!}</li>
                          @endforeach
                      </ul>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</main>


  <div class="map-container p-4 sm:p-6 lg:p-8 bg-black text-[rgba(238,185,93,1)]">
    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold  mb-4">Find Us</h2>
    <p class="mb-2">Visit us at:</p>
    <p class="font-semibold mb-4">12A Gilling Cres, Darlington DL1 4TH</p>
    <a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0" class="text-[#D4AF37] hover:text-[#B8860B]">
      <i class="fa-solid fa-map-location-dot fa-xl text-[rgba(238,185,93,1)]"></i>
    </a>
  </div>
  <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="md:max-w-96 w-full m-auto bg-black">
  <footer class="bg-gray-900 text-white text-center p-4">
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("myLinks");
      menu.classList.toggle("hidden");
    }
  </script>
</body>

</html>