<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="L'Alexia Atelier offers personalized permanent makeup and aesthetics treatments in Darlington, UK.">
  <meta name="keywords" content="permanent makeup, aesthetics salon, beauty treatments, Darlington">
  <meta name="author" content="L'Alexia Atelier">
  <meta property="og:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
  <meta property="og:description" content="Enhance your beauty with expert permanent makeup and aesthetics treatments at L'Alexia Atelier.">
  <meta property="og:image" content="https://example.com/path-to-image.jpg">
  <meta property="og:url" content="https://yourwebsite.com">
  <meta property="og:type" content="website">
  <meta name="twitter:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
  <meta name="twitter:description" content="Personalized permanent makeup and aesthetics treatments in Darlington, UK.">
  <meta name="twitter:image" content="https://example.com/path-to-image.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" href="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.png" type="image/png">
  <title>L'Alexia Atelier - Permanent Makeup & Aesthetics Salon</title>
  <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
  <script>
    function toggleMenu() {
      document.getElementById("myLinks").classList.toggle("hidden");
    }
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-white bg-[url('/images/8382376.webp')] bg-repeat-space m-0 p-0 bg-cover">
  @include('layouts.navigation')
  <main class="max-w-7xl mx-auto p-6">
    <h2 class="text-3xl font-semibold text-center mb-6">Gallery of Transformations</h2>
    <p class="text-center text-lg mb-6">Explore our curated gallery showcasing the artistry and precision of our treatments.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <img src="{{ asset('images/lips.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Lips after operation">
      <img src="{{ asset('images/eyebrowss.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Eyebrows after makeup">
      <img src="{{ asset('images/scar.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Healed scar picture after treatment">
      <img src="{{ asset('images/wrinkles.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Wrinkles picture after intervention">
      <img src="{{ asset('images/wrinkles_2.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Wrinkles picture after intervention">
      <img src="{{ asset('images/russian_lips2.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Russian Lips">
    </div>
    
  </main>
  @include('layouts.footer')
</body>
</html>
