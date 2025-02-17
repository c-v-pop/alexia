<script src="https://cdn.tailwindcss.com"></script>
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
      <div class="flex items-start md:items-center justify-center min-h-screen">
    <div class="flex flex-col p-4 space-y-2 items-center text-center flex-wrap md:text-2xl">
        <section class="mb-10">
            
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
        <h2>Please feel FREE to book your consultation with me. <br> I am happy to help you and meet your expectations.</h2>
    </div>
      </div>
      </div>
        <footer class="bg-black/95 flex flex-col justify-center m-auto text-center">
          <p class="text-[rgba(238,185,93,1)]">&copy; <?php echo date('Y'); ?> Permanent Makeup & Aesthetics. All rights reserved.</p>
        </footer>
</body>
