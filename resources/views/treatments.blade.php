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
    <aside>
        <section class="text-center m-8 grid grid-cols-1 sm:grid-cols-2 gap-4 justify-center">
            @php
            $categories = [
                'FACIAL TREATMENTS' => 'facial_treatment.jpg',
                'EYEBROWS STYLING' => 'eyebrows.png',
            ];
            $separateCategories = [
                'PERMANENT MAKEUP' => 'semi-permanent.jpg',
                'AESTHETIC TREATMENTS' => 'aesthetics-treatment.jpg',
            ];
            @endphp
        
            {{-- First Block: Facial Treatments & Eyebrows Styling --}}
            @foreach ($categories as $category => $image)
                @php $slug = Str::slug($category, '-'); @endphp
                <a href="{{ url($slug) }}" class="w-full max-w-[650px] mx-auto">
                    <div class="bg-cover bg-center flex items-center justify-center text-[rgba(238,185,93,1)] text-lg font-bold rounded-md shadow-lg transition-transform duration-300 hover:scale-105"
                        style="background-image: url('{{ asset('images/' . rawurlencode($image)) }}');">
                        <div class="bg-black/50 px-4 py-2 rounded-md">
                            {{ $category }}
                        </div>
                    </div>
                </a>
            @endforeach
        
            {{-- Second Block: Permanent Makeup & Aesthetic Treatments --}}
            <div class="sm:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ($separateCategories as $category => $image)
                    @php $slug = Str::slug($category, '-'); @endphp
                    <a href="{{ url($slug) }}" class="w-full max-w-[650px] mx-auto">
                        <div class="bg-cover bg-center flex items-center justify-center text-[rgba(238,185,93,1)] text-lg font-bold rounded-md shadow-lg transition-transform duration-300 hover:scale-105"
                            style="background-image: url('{{ asset('images/' . rawurlencode($image)) }}');">
                            <div class="bg-black/50 px-4 py-2 rounded-md">
                                {{ $category }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        
  </aside>
   <div class="text-center">
      <h3>Find Us</h3>
      <p>Visit us at:</p>
      <p><strong>12A Gilling Cres, Darlington DL1 4TH</strong></p>
      <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
   </div>
   <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="md:max-w-96 w-full m-auto bg-black">

   <footer class="text-center p-4">
      <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
   </footer>
</body>
</html>