<script defer>
    function toggleMenu() {
        const menu = document.getElementById("myLinks");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
            requestAnimationFrame(() => {
                menu.classList.remove("opacity-0", "scale-95");
                menu.classList.add("opacity-100", "scale-100");
            });
        } else {
            menu.classList.remove("opacity-100", "scale-100");
            menu.classList.add("opacity-0", "scale-95");
            setTimeout(() => menu.classList.add("hidden"), 300);
        }
    }
 </script>
 
</head>

<body class="bg-transparent text-[rgba(238,185,93,1)]">

<header class="bg-transparent">
    <div class="flex md:justify-between justify-evenly items-center p-4">
        <img src="{{ asset('images/logo.webp') }}" alt="Beauty Saloon Logo" class="w-[12rem] md:w-[10rem]">
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('index') }}" title="Go to Home page" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Home</a>
            <a href="{{ route('treatments') }}" title="See all available treatments" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Treatments</a>
            <a href="{{ route('contraindications') }}" title="Read contraindications before booking" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Contraindications</a>
            <a href="{{ route('policies') }}" title="Read clinic regulations and policies" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Clinic Regulations</a>
            <a href="{{ route('gallery') }}" title="View our treatment gallery" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Gallery</a>
            <a href="https://www.facebook.com/la.alexia.atelier" title="Visit our Facebook page" title="Book an appointment online via Booksy" target="_blank" class="text-sm lg:text-2xl text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text relative after:content-[''] after:block after:h-[2px] after:bg-[rgba(238,185,93,1)] after:w-0 after:transition-all after:duration-300 hover:after:w-full">Facebook</a>
            <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-[rgba(238,185,93,0.6)]" title="Book an appointment online via Booksy" href="https://laalexiaatelier.booksy.com" target="_blank">Appointments</a>
        </nav>
        <button 
        class="md:hidden text-[rgba(238,185,93,1)] text-2xl" 
        onclick="toggleMenu()" 
        aria-label="Open navigation menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <span class="sr-only">Open menu</span>
    </button>
    </div>

    <div id="myLinks" class="hidden flex flex-col md:hidden p-4 space-y-2 items-start transition-all duration-300 ease-in-out opacity-0 scale-95">
        <a href="{{ route('index') }}" title="Go to Home page" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Home</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('treatments') }}" title="See all available treatments" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Treatments</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('contraindications') }}" title="Read contraindications before booking" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Contraindications</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('policies') }}" title="Read clinic regulations and policies" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Clinic Regulations</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="{{ route('gallery') }}" title="View our treatment gallery" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Gallery</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a href="https://www.facebook.com/la.alexia.atelier" title="Visit our Facebook page" title="Book an appointment online via Booksy" target="_blank" class="font-semibold block text-transparent bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] bg-clip-text hover:pl-2 transition-all duration-300">Facebook</a>
        <hr class="border border-[rgba(238,185,93,0.86)] w-full block md:hidden">
        <a class="bg-[rgba(238,185,93,1)] bg-gradient-to-r from-[rgba(238,185,93,0.86)] via-[rgba(242,237,207,1)] to-[rgba(238,185,93,1)] px-4 py-2 rounded-md text-black text-lg text-center m-auto transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-[rgba(238,185,93,0.6)]" title="Book an appointment online via Booksy" href="https://laalexiaatelier.booksy.com" target="_blank">Appointments</a>
    </div>
</header>
