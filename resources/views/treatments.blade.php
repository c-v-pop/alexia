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
<body class="text-[rgba(238,185,93,1)] bg-[url('/images/8382376.webp')] bg-repeat-space bg-fixed bg-cover m-0 p-0" loading="lazy">
    @include('layouts.navigation')
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