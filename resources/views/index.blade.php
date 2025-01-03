<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L' Alexia Atelier</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- Background Image -->
        <div class="fixed inset-0 -z-10">
            <img 
                id="background" 
                class="w-full h-full object-cover opacity-20" 
                src="{{ asset('images/landing_page.webp') }}" 
                alt="black-hair-dye-brush" 
            />
        </div>

        <!-- Main Content -->
        <div class="relative">
            <header class="flex justify-between px-4 py-6 items-center">
                <!-- Logo -->
                <div class="flex lg:justify-center lg:col-start-2 mr-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="Beauty Saloon Logo" class="h-48">
                </div>

                <!-- Navigation -->
                @if (Route::has('login'))
                <nav class="flex-1 justify-end hidden">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white transition hover:text-white/70">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white transition hover:text-white/70">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white transition hover:text-white/70">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>

                <ul class="flex gap-4 mr-8">
                    <li><a href="{{ route('index') }}" class="hover:underline text-2xl hover:text-white duration-300">Home</a></li>
                    <li><a href="{{ route('services') }}" class="hover:underline text-2xl hover:text-white duration-300">Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:underline text-2xl hover:text-white duration-300">Gallery</a></li>
                    <li><a href="https://laalexiaatelier.booksy.com" class="bg-green-500/40 text-white py-2 px-6 rounded hover:bg-green-500 transition font-serif">Book Now</a></li>
                </ul>
                @endif
            </header>

            <!-- Content -->
            <main class="mx-auto max-w-[2040px]">
                <div class="flex items-center justify-center">
                    <div class="text-center mt-10 px-6 bg-black/70 text-white rounded-md shadow-lg flex">   
                        <div class="flex flex-col items-center justify-center">
                            <h2 class="text-6xl font-extrabold mb-6 leading-tight">
                                Welcome to Permanent Makeup & Aesthetics
                            </h2>
                            <p class="text-2xl mb-6 font-light leading-relaxed">
                                Specializing in personalized treatments for beauty enhancement.
                            </p>
                            <p class="text-2xl font-medium leading-loose">
                                When it comes to your appearance, you deserve the best care that money can buy. 
                                Welcome to <span class="font-semibold italic">L’ Alexia Atelier Aesthetics Laser Clinic & Permanent Make-Up Institute</span>, 
                                the number one Skin Expert in cosmetology and aesthetics treatments in the North Yorkshire & Durhamshire area.
                            </p>
                            <p class="mt-4 text-2xl font-medium leading-loose">
                                We’re a certified Permanent Make-Up Clinic and diplomed Cosmetologist & Aesthetic Practitioner with many years of experience, 
                                providing professional, safe, and personalized services. If you’re looking for the best solutions for your aesthetic concerns – 
                                you’ve come to the right place!
                            </p>
                            <p class="mt-6 text-2xl font-semibold leading-relaxed">
                                Give us a call today and book a complimentary consultation meeting.
                            </p>
                        </div>
                        <div>
                            <img class="object-cover h-[800px] w-[1200px]" src="{{ asset('images/alexia_2.webp') }}" alt="woman-with-syringe" />
                        </div>
                    </div>
                </div>
                

                <section class="mx-auto px-4 mt-72 mb-28">
                    <h3 class="text-2xl font-semibold mb-6 text-center">Gallery</h3>
                    <div class="flex flex-wrap justify-center gap-6">
                        <!-- Replace with dynamic images -->
                        <img src="{{ asset('images/lips.jpg') }}" alt="Client Work 1" class="rounded shadow w-[calc(33.333%-1rem)] max-w-[600px] flex-grow h-auto object-cover">
                        <img src="{{ asset('images/wrinkles.jpg') }}" alt="Client Work 2" class="rounded shadow w-[calc(33.333%-1rem)] max-w-[600px] flex-grow h-auto object-cover">
                        <img src="{{ asset('images/russian_lips.jpg') }}" alt="Client Work 3" class="rounded shadow w-[calc(33.333%-1rem)] max-w-[600px] flex-grow h-auto object-cover">
                    </div>
                </section>
                
            </main>
        </div>
        <footer class="text-white mb-2 w-full">
            <div class="container mx-auto text-center">
                <p>&copy; {{ date('Y') }} Permanent Makeup & Aesthetics. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
