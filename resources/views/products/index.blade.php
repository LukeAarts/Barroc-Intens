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
      <a href="#" class="text-4xl font-bold">Barroc Intens</a>
      <ul class="flex ml-24 space-x-4 text-xl font-light">
        <li><a href="#" class="hover:text-gray-300">Home</a></li>
        <li><a href="{{route('products.index')}}" class="hover:text-gray-300">Machines</a></li>
        <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Diensten-sectie -->
  <section id="services" class="py-16 relative h-screen">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-8">Onze Machines</h2>
        </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-bit-deluxe.png" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Bit Deluxe</h3>
            <p>Deze deluxe machine is de shit!</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-bit-light.png" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Bit Light</h3>
            <p>Machine Bit Light. Topkwaliteit van ons bedrijf!</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-groot.jpg" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Groot</h3>
            <p>Hele grote machine voor heel veel mensen!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2023 KoffieVerhuur. Alle rechten voorbehouden.</p>
  </footer>
</body>
</html>
