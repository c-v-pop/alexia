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
  <main class="flex flex-col justify-center m-8">
    <div class="flex flex-col md:flex-row justify-center items-center m-auto">
      <div class="text-2xl">
        <h1>Welcome to Permanent Makeup & Aesthetics</h1>
        <p>Specializing in personalized treatments for beauty enhancement.</p>
        <p>
          When it comes to your appearance, you deserve the best care that money can buy.
          Welcome to <span style="font-weight: bold; font-style: italic;">Permanent Make-Up Institute</span>,
          the number one Skin Expert in cosmetology and aesthetics treatments in the North Yorkshire & Durhamshire area.
        </p>
        <p>Give us a call today and book a complimentary consultation meeting.</p>
      </div>
      <div>
        <img src="{{ asset('images/alexia-about-me.webp') }}" alt="Woman with syringe">
      </div>
    </div>
    <div>
      <section class="flex flex-col md:flex-row-reverse justify-start items-center m-auto">
        <div class="m-8 text-2xl">
          <h2 class="font-semibold">About Me</h2>
          <p>Thank you for your trust and support</p>
          <p>
            <strong>15 years of experience:</strong> I am a University graduate, accredited Aesthetic Medicine Practitioner,
            and Laser Hair Removal Specialist.
          </p>
          <p>
            <strong>Award-winning:</strong> Multiple <i>British Hair and Beauty Awards</i>, including Gold Winner for
            Semi-Permanent Makeup and Aesthetic Salon of the Year &#127942;.
          </p>
          <p>
            <strong>Published:</strong> Featured in *Leaders* magazine with a 3-page interview.
          </p>
          <p>
            <strong>Artistic roots:</strong> I love creating art and have exhibited my paintings in Hartlepool.
          </p>
          <p>
            <strong>Darlington-based</strong>
          </p>
        </div>
        <div>
          <img src="{{ asset('images/Alexia-about.webp') }}" alt="Woman">
        </div>
      </div>
    </section>
  </main>
  <section class="text-center m-8 flex flex-wrap justify-center gap-4">
    @foreach (['PERMANENT MAKEUP', 'FACIAL TREATMENTS'] as $category)
        <div class="w-full max-w-[250px] md:max-w-[450px] aspect-square bg-contain bg-no-repeat bg-center flex items-center justify-center text-[rgba(238,185,93,1)] text-lg font-bold rounded-md shadow-lg "
             style="background-image: url('{{ asset('images/laser_hair_removal.webp') }}');">
            <a>{{ $category }}</a>
        </div>
    @endforeach
    @foreach (['AESTHETIC TREATMENTS', 'EYEBROW STYLING'] as $category)
        <div class="w-full max-w-[250px] md:max-w-[450px] aspect-square bg-contain bg-no-repeat bg-center flex items-center justify-center text-[rgba(238,185,93,1)] text-lg font-bold rounded-md shadow-lg "
             style="background-image: url('{{ asset('images/laser_hair_removal.webp') }}');">
            <a>{{ $category }}</a>
        </div>
    @endforeach
</section>

  <aside>
    <div class="flex flex-col p-4 space-y-2 items-center text-center m-8">
        <div>
            <section>
                <h2>Please feel FREE to book your consultation with me. <br> I am happy to help you and meet your expectations.</h2>
                
                <!-- Permanent Makeup -->
                <div>
                    <h3>Permanent Makeup</h3>
                    <ul class="list-disc">
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
                
                <!-- Facial Treatments -->
                <div>
                    <h3>Facial Treatments</h3>
                    <ul class="list-disc">
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
                
                <!-- Aesthetic Treatments -->
                <div>
                    <h3>Aesthetic Treatments</h3>
                    <ul class="list-disc">
                        <li>Skin Needle Vitamins Mesotherapy - £100.00 (1h)</li>
                        <li>PRP - Vampire Facial - £130.00 (1h)</li>
                        <li>PRP + PRF Facial - £190.00 (1h)</li>
                        <li>Lumi Eyes - £130.00 (1h)</li>
                        <li>Seventy Hyal Skin Booster - £160.00 (1h)</li>
                        <li>Profhilo Skin Booster - £220.00 (1h)</li>
                        <li>Sunekos - £220.00 (1h)</li>
                        <li>Juvelook Eyes - £200.00 (1h)</li>
                        <li>Juvelook Vial - £490.00 (1h)</li>
                        <li>Lenisna Vial - £490.00 (1h)</li>
                    </ul>
                </div>
                
                <!-- Eyebrow Styling -->
                <div>
                    <h3>Eyebrow Styling</h3>
                    <ul class="list-disc">
                        <li>Ombre Powder Brows - £230.00 (3h)</li>
                        <li>Patch Test - Free (15min)</li>
                        <li>Top-Up (up to 8 weeks) - £50.00 (1h)</li>
                        <li>Top-Up (up to 12 months) - £125.00 (1h)</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</aside>
  <div class="text-center">
    <h2>Find Us</h2>
    <p>Visit us at:</p>
    <p><strong>12A Gilling Cres, Darlington DL1 4TH</strong></p>
    <p><a href="https://www.google.com/maps/dir//12+Gilling+Cres+Darlington+DL1+4TH/@54.5178569,-1.5305936,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x487e9a2ecbb6ea53:0x308f89e3df7508b0"><i class="fa-solid fa-map-location-dot fa-xl"></i></a></p>
  </div>
  <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="md:max-w-96 w-full m-auto bg-black">


  <footer class="bg-black/95 flex flex-col justify-center m-auto text-center">
    <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>

</html>
