<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koffiemachine Verhuur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans">

<!-- Navigatiebalk -->
<nav class="bg-black p-4 text-white">
    <div class="container mx-auto flex items-center">
        <a href="{{route('home')}}" class="text-4xl font-bold">Barroc Intens</a>
        <ul class="flex ml-24 space-x-4 text-xl font-light">
            <li><a href="{{route('home')}}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{route('products.index')}}" class="hover:text-gray-300">Machines</a></li>
            <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Diensten-sectie -->
<section id="services" class="py-16 relative h-screen">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-8">Offerte aanvraag verzonden!</h2>
            <h6 class="text-xl font-bold mb-8">Je wordt over 5 seconden automatisch teruggestuurd!</h6>
            <script>setTimeout(() => {
                window.location = "{{route('products.index')}}"
                }, 5000);</script>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2023 KoffieVerhuur. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
