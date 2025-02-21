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
  <main class="flex flex-col justify-center px-4 sm:px-8 lg:px-16 py-8">
    <!-- Card 1 -->
    <div class="bg-black/50 shadow-lg rounded-lg p-8 flex flex-col md:flex-row justify-center items-center mx-auto mb-20 gap-12 md:gap-16 text-white">
        <div class="text-center md:text-left flex-1">
            <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-[rgba(238,185,93,1)]">Welcome to Permanent Makeup & Aesthetics</h1>
            <p class="text-lg sm:text-xl mb-4 text-gray-300">Specializing in personalized treatments for beauty enhancement.</p>
            <p class="text-lg sm:text-xl mb-4 text-gray-300">
                When it comes to your appearance, you deserve the best care possible.  
                Welcome to <span class="font-bold italic text-[rgba(238,185,93,1)]">Permanent Make-Up Institute</span>,  
                the leading expert in cosmetology and aesthetics treatments in North Yorkshire & Durhamshire.
            </p>
            <p class="text-lg sm:text-xl font-semibold text-[rgba(238,185,93,1)]">Give us a call today to book a complimentary consultation.</p>
        </div>
        <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-2xl text-center m-auto w-full font-bold hover:text-yellow-600 duration-300 md:hidden" href="https://laalexiaatelier.booksy.com">Appointments</a>

        <div class="w-full md:w-auto">
            <img src="{{ asset('images/alexia-about-me.webp') }}" alt="Woman with syringe"
                class="max-h-[45em] w-full md:w-auto object-cover rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Card 2 (Reversed Layout) -->
    <div class="bg-black/50 shadow-lg rounded-lg p-8 flex flex-col md:flex-row-reverse justify-center items-center mx-auto mb-20 gap-12 md:gap-16 w-full text-white">
        <div class="text-center md:text-left flex-1">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-[rgba(238,185,93,1)]">About Me</h2>
            <p class="text-lg sm:text-xl font-semibold mb-4 text-[rgba(238,185,93,1)]">Thank you for your trust and support.</p>
            <ul class="text-lg sm:text-xl space-y-3 text-gray-300">
                <li><strong class="text-[rgba(238,185,93,1)]">15 years of experience:</strong> University graduate, accredited Aesthetic Medicine Practitioner, and Laser Hair Removal Specialist.</li>
                <li><strong class="text-[rgba(238,185,93,1)]">Award-winning:</strong> Multiple <i>British Hair and Beauty Awards</i>, including Gold Winner for Semi-Permanent Makeup and Aesthetic Salon of the Year 🏆.</li>
                <li><strong class="text-[rgba(238,185,93,1)]">Published:</strong> Featured in <i>Leaders</i> magazine with a 3-page interview.</li>
                <li><strong class="text-[rgba(238,185,93,1)]">Artistic roots:</strong> Passionate about art, with paintings exhibited in Hartlepool.</li>
                <li><strong class="text-[rgba(238,185,93,1)]">Based in Darlington.</strong></li>
            </ul>
        </div>
        <div class="w-full md:w-auto">
            <img src="{{ asset('images/Alexia-about.webp') }}" alt="Woman"
                class="max-h-[45em] w-full md:w-auto object-cover rounded-lg shadow-lg">
        </div>
    </div>
</main>



  <h2 class="text-4xl text-center mx-auto my-24 font-bold">Treatments</h2>
  <section class="text-center grid grid-cols-1 md:grid-cols-2 gap-4 max-w-5xl md:mx-auto my-16 mx-8">
    @php
    $categories = [
        'FACIAL TREATMENTS' => 'facial_treatment.jpg',
        'EYEBROWS STYLING' => 'eyebrows.png',
        'PERMANENT MAKEUP' => 'semi-permanent.jpg',
        'AESTHETIC TREATMENTS' => 'aesthetics-treatment.jpg',
    ];
    @endphp

    @foreach ($categories as $category => $image)
        @php
            $slug = Str::slug($category, '-');
        @endphp
        <a href="{{ url($slug) }}" class="block w-full">
            <div class="relative aspect-square bg-cover bg-center rounded-md shadow-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:border-4 hover:border-[rgba(238,185,93,1)]"
                 style="background-image: url('{{ asset('images/' . rawurlencode($image)) }}');">
                <div class="absolute inset-0 bg-black/50 flex items-center justify-center hover:bg-black/0">
                    <span class="text-[rgba(238,185,93,1)] text-lg font-bold px-4 py-2 rounded-md">
                        {{ $category }}
                    </span>
                </div>
            </div>
        </a>
    @endforeach
</section>


<div>
  <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="md:max-w-96 w-full m-auto bg-black">
  <div class="text-center mb-10">
    <h2>Find Us At:</h2>
    <p><strong>12A Gilling Cres, Darlington DL1 4TH</strong></p>
    <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
  </div>
</div>
  <footer class="bg-black/95 flex flex-col justify-center m-auto text-center mt-6">
    <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>

</html>
