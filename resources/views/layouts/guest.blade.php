<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koffiemachine Verhuur</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans">

<!-- Navigatiebalk -->
<nav class="bg-black p-4 text-white">
    <div class="container mx-auto flex items-center w-full">
        <a href="{{route('home')}}" class="text-4xl font-bold">Barroc Intens</a>
        <ul class="flex ml-24 space-x-4 text-xl font-light">
            <li><a href="{{route('home')}}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{route('products.index')}}" class="hover:text-gray-300">Producten</a></li>
            <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
        </ul>
        @if(\Illuminate\Support\Facades\Auth::user() != null && !\Illuminate\Support\Facades\Auth::user()->hasRole('Customer'))
            <ul class="flex right-64 space-x-4 text-xl font-light float-right absolute">
                <li><a href="{{route('dashboard')}}" class="hover:text-gray-300">Dashboard</a></li>
                <li><a href="{{route('logout')}}" class="hover:text-gray-300">Logout</a></li>
            </ul>
        @endif
    </div>
</nav>

<!-- Diensten-sectie -->
<section id="services" class="py-16 relative h-screen">
    @yield('content')
</section>
<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2023 KoffieVerhuur. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>

