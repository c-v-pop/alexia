<!DOCTYPE html>
<html>
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
<body class="text-[rgba(238,185,93,1)] bg-[url('/images/main_bg.webp')] m-0 p-0 bg-repeat-round bg-cover">
  @include('layouts.navigation')
<div class="p-6 sm:p-8 lg:p-10 max-w-5xl mx-auto">
  <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[rgba(238,185,93,1)] text-center mb-6">
      Our Clinic Regulations
  </h2>

  <div class="border-2 border-[rgba(238,185,93,1)] rounded-xl p-6 sm:p-8">
      <div class="grid md:grid-cols-1 gap-8">
          @php
              $regulations = [
                  "By subscribing for the treatment, you fully accept the regulations and rules listed below.",
                  "Clients before each treatment sign the consent for the procedure and take into account the side effects.",
                  "All clients for all needle procedures must be over 18 years old.",
                  "£30-£50 secure deposit is required. Unless the operator requests otherwise.",
                  "The Client has 24 hours from the moment of signing up to settle the deposit. If not done, the reservation is automatically canceled, and the date becomes available to other customers.",
                  "If the treatment takes place, its price is reduced by the value of the deposit.",
                  "The deposit can be settled by bank transfer: <strong>L ALEXIA ATELIER Ltd</strong>, Sort Code: <strong>20-59-43</strong>, Account: <strong>33814505</strong>.",
                  "In the title of the transfer, enter your date and time of the visit. Failure to provide these details makes it impossible to guarantee availability of the booked date.",
                  "When booking the date, ensure there are no contraindications for the procedure. If there are doubts about your health or medications, contact me immediately. Appearing at the appointment with an obvious contraindication results in the loss of the deposit.",
                  "All consultation regarding skin condition, skin examination, pre-treatment, and after-treatment advice costs £35 for a 25-minute session. If the Client books an appointment and pays for the treatment in full after the consultation, the consultation is FREE.",
                  "The customer has the right to change the date of the visit at least 48 hours before the planned visit. Last-minute cancellations result in a lost deposit. Multiple cancellations may lead to being added to the 'Black List' and loss of the advance payment.",
                  "Clients can postpone the appointment twice, requesting no later than 48 hours before the planned meeting. Otherwise, the down payment will be forfeited. Appointments cannot be postponed indefinitely.",
                  "Complete resignation from the treatment forfeits the down payment. The treatment cannot be transferred to another client.",
                  "Clients with previous permanent makeup must inform the linergist. Arriving with old, visible makeup without prior notice, which makes the procedure impossible, results in loss of the deposit.",
                  "During the semi-permanent makeup treatment, an initial drawing is made, and the method is selected based on the client’s natural beauty.",
                  "The artist reserves the right to refuse service if the Client’s expectations are inconsistent with the proposed visualization.",
                  "If the Client does not accept the proposed shape, method, and color of the pigment and decides to resign during the visit, the advance payment is non-refundable.",
                  "L' Alexia Atelier does not guarantee the effect or final result of the procedure. The skin’s response and aftercare are crucial.",
                  "Lip Modeling requires 4-6 weeks to settle. Multiple visits may be needed for optimal results.",
                  "Clients delaying makeup correction due to pregnancy must pay 30% of the current price within two years or 100% afterward.",
                  "Permanent makeup refreshes up to a year cost 50% of the current price. Over two years, it costs 100%.",
                  "Yearly Top Up after Semi Permanent makeup is required, the salon is not responsible for failure to refresh and maintain makeup according to recommendations.",
                  "Semi permanent makeup is a treatment consisting of two micro pigmentation treatments. Failure to attend or rejection of the second pigmentation process may result in incomplete treatment results.",
                  "Corrections after other salons are priced individually and treated as new treatments.",
                  "Visible asymmetries unsuitable for pigmentation require aesthetic medicine treatments.",
                  "Treatment prices in the price list cover one pigmentation session; corrections are extra.",
                  "Gift vouchers are non-refundable if contraindications prevent treatment.",
                  "Gift vouchers are non-refundable and exchangeable without any exceptions.",
                  "Gift vouchers are worthless after the expiry date.",
                  "Gift vouchers are not subject to a monopoly.",
                  "Clients are requested to come alone and mute phones during procedures.",
                  "Children are not allowed during treatment procedures.",
                  "Clients arriving over 15 minutes late risk losing their deposit and having the procedure refused.",
                  "L' Alexia Atelier reserves the right to modify regulations and appointment dates by mutual agreement.",
                  "No refund policy applies to treatments, as time, products, and work are invested in each appointment. If the client claims the right to return the deposit when the treatment has not taken place, the salon may impose a fine of 100% of the value of the treatment.",
                  "Complaints must be submitted in person at the salon. Phone calls, messages, or photos are not accepted.",
                  "Complaint procedures may take up to 30 working days from submission.",
                  "The salon offers assistance for post-treatment complications if the client cooperates and follows recommendations.",
                  "Necessary corrections require the Client’s attendance at the salon on the appointed date.",
                  "Every client who agrees to any treatment in the salon is aware of the risks and consequences of the procedure performed.",
                  "Clients are responsible for transportation costs to the salon. The salon does not compensate for such expenses.",
                  "By paying the deposit and attending L' Alexia Atelier, you agree to these rules."
              ];
          @endphp

          <ul class="space-y-4">
              @foreach ($regulations as $index => $regulation)
                  <li class="flex items-start duration-300 cursor-default">
                      <span class="text-white font-bold mr-2">•</span> 
                      <span class="text-white">{!! $regulation !!}</span>
                  </li>
                  @if ($index === round(count($regulations) / 2) - 1)
                      </ul><ul class="space-y-4">
                  @endif
              @endforeach
          </ul>
      </div>
  </div>
</div>

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
  <footer class="text-center m-8">
    <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>
</html>