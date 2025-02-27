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
<body class="text-[rgba(238,185,93,1)] bg-[url('/images/main_bg.webp')] m-0 p-0 bg-repeat-round bg-cover">
  @include('layouts.navigation')
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

<main class="p-6 sm:p-8 lg:p-12 max-w-[1200px] mx-auto">
    <div class="space-y-10">
        <!-- Main Title -->
        <h2 class="text-center text-3xl sm:text-4xl lg:text-5xl font-bold text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">
            SEMI PERMANENT MAKE-UP
        </h2>

        <div class="space-y-16">
            @foreach ($treatments as $treatment)
                <div class="p-6 border border-[rgba(238,185,93,1)] shadow-lg rounded-lg">
                    <!-- Section Title -->
                    <h3 class="text-center text-2xl sm:text-3xl lg:text-4xl font-semibold text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text mb-4 uppercase">
                        {{ $treatment['title'] }}
                    </h3>

                    <!-- Treatment List -->
                    <ul class="list-disc list-inside space-y-3 text-lg sm:text-xl text-white leading-relaxed">
                        @foreach ($treatment['items'] as $item)
                            <li class="pl-2 duration-300 cursor-default">{!! $item !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</main>

@include('layouts.footer')

  <script>
    function toggleMenu() {
      const menu = document.getElementById("myLinks");
      menu.classList.toggle("hidden");
    }
  </script>
</body>

</html>