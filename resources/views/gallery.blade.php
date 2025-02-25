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
<body class="text-[rgba(238,185,93,1)] bg-[url('/images/main_bg.webp')] m-0 p-0 bg-repeat-round bg-cover">
  <header class="bg-transparent">
    <div class="flex md:justify-between justify-end items-center p-4">
        <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="w-[32rem] md:w-[18rem]">
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('index') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="{{ route('treatments') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Treatments</a>
            <a href="{{ route('contraindications') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Contraindications</a>
            <a href="{{ route('policies') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Clinic Regulations</a>
            <a href="{{ route('gallery') }}" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Gallery</a>
            <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-[rgba(238,185,93,0.6)]" href="https://laalexiaatelier.booksy.com">Appointments</a>
        </nav>
        <button class="md:hidden text-[rgba(238,185,93,1)] text-2xl" onclick="toggleMenu()"><i class="fa fa-bars"></i></button>
    </div>
    <div id="myLinks" class="hidden flex flex-col md:hidden p-4 space-y-2 items-start transition-all duration-300 bg-transparent">
        <a href="{{ route('index') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Home</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('treatments') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Treatments</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('contraindications') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Contraindications</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('policies') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Clinic Regulations</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('gallery') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Gallery</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg text-center m-auto transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-[rgba(238,185,93,0.6)]" href="https://laalexiaatelier.booksy.com">Appointments</a>
    </div>
</header>
  <main class="max-w-7xl mx-auto p-6">
    <h2 class="text-3xl font-semibold text-center mb-6">Gallery of Transformations</h2>
    <p class="text-center text-lg mb-6">Explore our curated gallery showcasing the artistry and precision of our treatments.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <img src="{{ asset('images/lips.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Lips after operation">
      <img src="{{ asset('images/eyebrows.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Eyebrows after makeup">
      <img src="{{ asset('images/scar.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Healed scar picture after treatment">
      <img src="{{ asset('images/wrinkles.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Wrinkles picture after intervention">
      <img src="{{ asset('images/wrinkles_2.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Wrinkles picture after intervention">
      <img src="{{ asset('images/russian_lips2.webp') }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-110" alt="Russian Lips">
    </div>
    
  </main>
  <div>
    <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="md:max-w-96 w-full m-auto bg-transparent">
    <div class="text-center mb-10 bg-transparent p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl font-bold text-[rgba(238,185,93,1)] mb-2">Find Us At:</h2>
      <p class="text-lg font-bold text-[rgba(238,185,93,1)]">12A Gilling Cres, Darlington DL1 4TH</p>
      <p class="mt-4">
          <a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0" 
             class="inline-block text-[rgba(238,185,93,1)] bg-transparent hover:bg-[rgba(238,185,93,1)] hover:text-black transition-colors duration-300 p-3 rounded-full shadow-md">
              <i class="fa-solid fa-map-location-dot fa-2xl"></i>
          </a>
      </p>
  </div>
  <footer class="text-center p-4 bg-opacity-60 bg-transparent mt-6">
    <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>
</html>
