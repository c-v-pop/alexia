<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Website' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">

    <main class="container mx-auto mt-6 ">
        @yield('content')
    </main>

    <footer class="text-white py-6 mt-12 w-full bg-transparent">
        <div class="container mx-auto text-center font-bold">
            <p>&copy; {{ date('Y') }} Permanent Makeup & Aesthetics. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
