<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="min-h-screen flex flex-col items-center justify-center">
                <div class="relative w-full">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 sticky top-0 pr-6 bg-white">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img src="{{ asset('images/logo.avif') }}" alt="Beauty Saloon Logo">
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-black"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-black"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-black"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <x-layout>
                        @section('content')
                        <div class="text-center py-10">
                            <h2 class="text-3xl font-bold mb-4">Welcome to Permanent Makeup & Aesthetics</h2>
                            <p class="mb-8">Specializing in personalized treatments for beauty enhancement.</p>
                            <a href="https://booksy.com" class="bg-orange-500 text-white py-2 px-6 rounded hover:bg-black transition">Book Now</a>
                        </div>
                    
                        <section class="mt-12">
                            <h3 class="text-2xl font-semibold mb-4">Gallery</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Replace with dynamic images -->
                                <img src="path/to/image1.jpg" alt="Client Work 1" class="rounded shadow">
                                <img src="path/to/image2.jpg" alt="Client Work 2" class="rounded shadow">
                                <img src="path/to/image3.jpg" alt="Client Work 3" class="rounded shadow">
                            </div>
                        </section>
                        @endsection
                    </x-layout>
                </div>
            </div>
        </div>
    </body>
</html>
