<!DOCTYPE html>
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
<body class="text-white bg-[url('/images/8382376.webp')] bg-repeat-space m-0 p-0 bg-cover">
  @include('layouts.navigation')  
  <div class="flex items-start md:items-center justify-center min-h-screen">
    <div class="flex flex-col p-4 space-y-2 items-center text-center flex-wrap md:text-2xl">
      <section class="mb-10 p-6">
        
        <!-- Permanent Makeup -->
        <div>
          <h3 class="my-16 font-bold text-4xl">Facial Makeup</h3>
          <ul class="list-disc text-start flex flex-col gap-4">
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
      </section>
      <h2 class="!mb-8 font-semibold">Please feel FREE to book your consultation with me. <br> I am happy to help you and meet your expectations.</h2>
      <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-2xl text-center m-auto w-full font-bold hover:text-yellow-600 duration-300" href="https://laalexiaatelier.booksy.com">Appointments</a>
    </div>
  </div>
</div>
@include('layouts.footer')
</body>
