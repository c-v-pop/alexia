<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Meta Tags for SEO -->
      <meta name="description" content="Transform your beauty with expert permanent makeup and aesthetics treatments at L'Alexia Atelier in Darlington, UK. Book your free consultation today!">
      <meta name="author" content="L'Alexia Atelier">
  
      <!-- Open Graph Meta Tags for Social Media -->
      <meta property="og:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
      <meta property="og:description" content="Enhance your beauty with expert permanent makeup and aesthetics treatments at L'Alexia Atelier in Darlington, UK. Book your consultation today.">
      <meta property="og:image" content="https://laalexiaatelier.co.uk/images/Alexia-about.webp">
      <meta property="og:url" content="https://laalexiaatelier.co.uk/">
      <meta property="og:type" content="website">
  
      <!-- Twitter Card Meta Tags -->
      <meta name="twitter:title" content="L'Alexia Atelier - Permanent Makeup & Aesthetics Salon">
      <meta name="twitter:description" content="Personalized permanent makeup and aesthetics treatments in Darlington, UK. Book for a consultation at L'Alexia Atelier.">
      <meta name="twitter:image" content="https://laalexiaatelier.co.uk/images/Alexia-about.webp">
      <meta name="twitter:card" content="summary_large_image">
  
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
  
      <title>L'Alexia Atelier - Permanent Makeup & Aesthetics Salon</title>
  
      <!-- Preload Important Assets -->
      <link rel="preload" as="image" href="{{ asset('images/Alexia-about.webp') }}" type="image/webp">
      <link rel="preload" as="image" href="{{ asset('images/bg_removed.webp') }}" type="image/webp">
      <link rel="preload" as="image" href="{{ asset('images/8382376.webp') }}" type="image/webp">
  
      <!-- Preconnect to Speed Up External Resources -->
      <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
      <link rel="dns-prefetch" href="https://kit.fontawesome.com">
  
      <!-- Load CSS (Use Compiled Tailwind Instead) -->
      <script src="https://cdn.tailwindcss.com"></script>
  
      <!-- FontAwesome (Defer Loading) -->
      <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous" defer></script>
  </head>
   <body class="text-[rgba(238,185,93,1)] bg-[url('/images/8382376.webp')] bg-repeat-space bg-fixed bg-cover m-0 p-0" loading="lazy">
      @include('layouts.navigation')
      <main class="flex flex-col justify-center px-4 sm:px-8 lg:px-16 py-8 max-w-[1920px] m-auto">
         <!-- Card 1 -->
         <div class="bg-transparent/50 min-h-[500px] relative shadow-lg rounded-lg p-8 flex flex-col md:flex-row justify-between items-center mx-auto mb-20 gap-12 md:gap-16 text-white bg-[url('/images/Alexia-about.webp')] bg-cover bg-no-repeat bg-center md:bg-none">
            {{-- Overlay for better contrast (Only on mobile) --}}
            <div class="absolute inset-0 bg-transparent/40 backdrop-blur-xs rounded-lg md:hidden"></div>
            {{-- Text Content --}}
            <div class="relative text-center md:text-left flex-1 z-10 flex flex-col justify-end">
               <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-white">Welcome to Permanent Makeup & Aesthetics</h1>
               <p class="text-lg sm:text-xl font-semibold text-white">Give us a call today to book a complimentary consultation.</p>
            </div>
            {{-- CTA Button --}}
            <a class="relative z-10 bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-2xl text-center m-auto w-full font-bold hover:text-yellow-600 duration-300 md:hidden" href="https://laalexiaatelier.booksy.com">Appointments</a>
            {{-- Image --}}
            <div class="relative w-full md:w-auto md:block hidden z-10">
               <img src="{{ asset('images/bg_removed.webp') }}" 
                  alt="Woman with syringe"
                  width="800" height="600"
                  class="max-h-[45em] w-full md:w-auto object-cover rounded-lg shadow-lg"
                  fetchpriority="high">
            </div>
         </div>
         <!-- Card 2 (Reversed Layout) -->
         <div class="bg-transparent/50 shadow-lg rounded-lg p-8 flex flex-col md:flex-row-reverse justify-center items-center mx-auto mb-20 gap-12 md:gap-16 w-full text-white">
            <div class="text-center md:text-left flex-1">
               <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-[rgba(238,185,93,1)]">About Me</h2>
               <p class="text-lg sm:text-xl mb-4 text-gray-200">Specializing in personalized treatments for beauty enhancement.</p>
               <p class="text-lg sm:text-xl mb-4 text-gray-200">
                  When it comes to your appearance, you deserve the best care possible.  
                  Welcome to <span class="font-bold italic text-[rgba(238,185,93,1)]">Permanent Make-Up Institute</span>,  
                  the leading expert in cosmetology and aesthetics treatments in North Yorkshire & Durhamshire.
               </p>
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
                  class="max-h-[45em] w-full md:w-auto object-cover rounded-lg shadow-lg hidden md:block" loading="lazy">
               <img src="{{ asset('images/bg_removed.webp') }}" alt="Woman with syringe"
                  class="max-h-[45em] w-full md:w-auto object-cover rounded-lg shadow-lg md:hidden block">
            </div>
         </div>
      </main>
      <h2 class="text-4xl text-center mx-auto my-12 font-bold">Treatments</h2>
      <section class="text-center grid grid-cols-1 md:grid-cols-2 gap-4 max-w-5xl md:mx-auto my-16 mx-8">
         @php
         $categories = [
         'FACIAL TREATMENTS' => 'facial_treatment.webp',
         'EYEBROWS STYLING' => 'eyebrows.webp',
         'PERMANENT MAKEUP' => 'semi-permanent.webp',
         'AESTHETIC TREATMENTS' => 'aesthetics-treatment.webp',
         ];
         @endphp
         @foreach ($categories as $category => $image)
         @php
         $slug = Str::slug($category, '-');
         @endphp
         <a href="{{ url($slug) }}" class="block w-full">
            <div class="relative aspect-square bg-cover bg-center rounded-md shadow-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:border-4 hover:border-[rgba(238,185,93,1)]"
               style="background-image: url('{{ asset('images/' . rawurlencode($image)) }}');">
               <div class="absolute inset-0 bg-transparent/50 flex items-center justify-center hover:bg-transparent/0">
                  <span class="text-white text-lg font-bold px-4 py-2 rounded-md">
                  {{ $category }}
                  </span>
               </div>
            </div>
         </a>
         @endforeach
      </section>
      @include('layouts.footer')
   </body>
</html>