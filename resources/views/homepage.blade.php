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

  <!-- Hero-sectie met achtergrondfoto -->
  <header class="bg-center relative h-screen" style="background-image: url('images/-1200-1200.jpg'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="text-center text-white">
        <h1 class="text-5xl font-bold mb-2">Welkom bij KoffieVerhuur</h1>
        <p class="text-lg font-light">Ontdek onze hoogwaardige koffiemachines voor verhuur</p>
        <a href="#services" class="mt-4 inline-block border-2 border-yellow-400 hover:bg-yellow-400 duration-200 text-white font-bold py-2 px-6 rounded-full">Bekijk onze diensten</a>
      </div>
    </div>
  </header>

  <!-- Diensten-sectie -->
  <section id="services" class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8">Onze Diensten</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-2">Kwaliteitsmachines</h3>
          <p>Bekijk onze selectie van hoogwaardige koffiemachines van topmerken.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-2">Flexibele Huuropties</h3>
          <p>Kies uit verschillende huurplannen die aan uw behoeften voldoen.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-2">Onderhoud en Support</h3>
          <p>Profiteer van ons onderhoud en 24/7 klantenondersteuning.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact-sectie -->
  <section id="contact" class="bg-gray-100 py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8">Contacteer Ons</h2>
      <p>Heeft u vragen of wilt u meer informatie? Neem gerust contact met ons op.</p>
      <a href="#" class="mt-4 inline-block bg-gray-800 text-white py-2 px-4 rounded-full">Neem contact op</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2023 KoffieVerhuur. Alle rechten voorbehouden.</p>
  </footer>
</body>
</html>
