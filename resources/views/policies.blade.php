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
<body>
  <header class="bg-black/95">
    <div class="flex justify-between items-center p-4">
      <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="w-40">
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
    <div id="myLinks" class="hidden flex flex-col md:hidden p-4 space-y-2 items-center">
      <a href="{{ route('index') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Home</a>
      <hr>
      <a href="{{ route('treatments') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Treatments</a>
      <hr>
      <a href="{{ route('services') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Contraindications</a>
      <hr>
      <a href="{{ route('policies') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Clinic Regulations</a>
      <hr>
      <a href="{{ route('gallery') }}" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text">Gallery</a>
      <hr>
      <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg" href="https://laalexiaatelier.booksy.com">Appointments</a>
    </div>    
  </header>
  <div class="regulations">
    <h2>Our Clinic Regulations</h2>
    <ul>
      <li>By subscribing for the treatment, you fully accept the regulations and the rules listed below.</li>
      <li>Clients before each treatment sign the consent for the procedure and take into account the side effects of the performed treatment.</li>
      <li>All clients for all needle procedures must be over 18 years old.</li>
      <li>£30-£50 secure deposit is required. Unless the operator requests otherwise.</li>
      <li>The Client has 24 hours from the moment of signing up to settle the deposit. If not done, the reservation is automatically canceled, and the date becomes available to other customers.</li>
      <li>If the treatment takes place, its price is reduced by the value of the deposit.</li>
      <li>The deposit can be settled by bank transfer: <strong>L ALEXIA ATELIER Ltd</strong>, Sort Code: <strong>20-59-43</strong>, Account: <strong>33814505</strong>.</li>
      <li>In the title of the transfer, enter your date and time of the visit. Failure to provide these details makes it impossible to guarantee availability of the booked date.</li>
      <li>When booking the date, ensure there are no contraindications for the procedure. If there are doubts about your health or medications, contact me immediately. Appearing at the appointment with an obvious contraindication results in the loss of the deposit.</li>
      <li>All consultation regarding skin condition, skin examination, pre-treatment, and after-treatment advice costs £35 for a 25-minute session. If the Client books an appointment and pays for the treatment in full after the consultation, the consultation is FREE.</li>
      <li>The customer has the right to change the date of the visit at least 48 hours before the planned visit. Last-minute cancellations result in a lost deposit. Multiple cancellations may lead to being added to the "Black List" and loss of the advance payment.</li>
      <li>Clients can postpone the appointment twice, requesting no later than 48 hours before the planned meeting. Otherwise, the down payment will be forfeited. Appointments cannot be postponed indefinitely.</li>
      <li>Complete resignation from the treatment forfeits the down payment. The treatment cannot be transferred to another client.</li>
      <li>Clients with previous permanent makeup must inform the linergist. Arriving with old, visible makeup without prior notice, which makes the procedure impossible, results in loss of the deposit.</li>
      <li>During the semi-permanent makeup treatment, an initial drawing is made, and the method is selected based on the client’s natural beauty.</li>
      <li>The artist reserves the right to refuse service if the Client’s expectations are inconsistent with the proposed visualization.</li>
      <li>If the Client does not accept the proposed shape, method, and color of the pigment and decides to resign during the visit, the advance payment is non-refundable.</li>
      <li>L' Alexia Atelier does not guarantee the effect or final result of the procedure. The skin’s response and aftercare are crucial.</li>
      <li>Lip Modeling requires 4-6 weeks to settle. Multiple visits may be needed for optimal results.</li>
      <li>Clients delaying makeup correction due to pregnancy must pay 30% of the current price within two years or 100% afterward.</li>
      <li>Permanent makeup refreshes up to a year cost 50% of the current price. Over two years, it costs 100%.</li>
      <li>Yearly Top Up after Semi Permanent makeup is required, the salon is not responsible for failure to refresh and maintain makeup according to recommendations.</li>
      <li>Semi permanent makeup is a treatment consisting of two micro pigmentation treatments. Failure to attend or rejection of the second pigmentation process may result in incomplete treatment results.</li>
      <li>Corrections after other salons are priced individually and treated as new treatments.</li>
      <li>Visible asymmetries unsuitable for pigmentation require aesthetic medicine treatments.</li>
      <li>Treatment prices in the price list cover one pigmentation session; corrections are extra.</li>
      <li>Gift vouchers are non-refundable if contraindications prevent treatment.</li>
      <li>Gift vouchers are non-refundable and exchangeable without any exceptions.</li>
      <li>Gift vouchers are worthless after the expiry date.</li>
      <li>Gift vouchers are not subject to a monopoly.</li>
      <li>Clients are requested to come alone and mute phones during procedures.</li>
      <li>Children are not allowed during treatment procedures.</li>
      <li>Clients arriving over 15 minutes late risk losing their deposit and having the procedure refused.</li>
      <li>L' Alexia Atelier reserves the right to modify regulations and appointment dates by mutual agreement.</li>
      <li>No refund policy applies to treatments, as time, products, and work are invested in each appointment. If the client claims the right to return the deposit when the treatment has not taken place, the salon may impose a fine of 100% of the value of the treatment.</li>
      <li>Complaints must be submitted in person at the salon. Phone calls, messages, or photos are not accepted.</li>
      <li>Complaint procedures may take up to 30 working days from submission.</li>
      <li>The salon offers assistance for post-treatment complications if the client cooperates and follows recommendations.</li>
      <li>Necessary corrections require the Client’s attendance at the salon on the appointed date.</li>
      <li>Every client who agrees to any treatment in the salon is aware of the risks and consequences of the procedure performed.</li>
      <li>Clients are responsible for transportation costs to the salon. The salon does not compensate for such expenses.</li>
      <li>By paying the deposit and attending L' Alexia Atelier, you agree to these rules.</li>
    </ul>    
  </div>
  <img src="https://raw.githubusercontent.com/c-v-pop/alexia/refs/heads/main/public/images/logo.webp" alt="Beauty Saloon Logo" class="w-full m-auto bg-black">
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
  </footer>
</body>
</html>
