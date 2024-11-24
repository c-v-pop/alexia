<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Website' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <header class="py-4">
        <div class="container mx-auto flex justify-between items-center max-w-7xl">
            <h1 class="text-xl font-bold">Permanent Makeup & Aesthetics</h1>
            <nav>
                <ul class="flex gap-4">
                    <li><a href="{{ route('index') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:underline">Gallery</a></li>
                    <li><a href="https://booksy.com" class="bg-orange-500 text-white py-2 px-6 rounded hover:bg-black transition">Book Now</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-6 max-w-7xl">
        @yield('content')
    </main>

    <footer class="text-white py-6 mt-12 w-full bg-black">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Permanent Makeup & Aesthetics. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
