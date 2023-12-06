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
            <h2 class="text-3xl font-bold mb-8">Offerte voor {{$title}}</h2>
        </div>
        <div class="text-center items-center">
            <form class="pr-32 pl-32 w-full" action="{{route('quote.store')}}" method="POST">
                @csrf
                <input type="number" name="productid" hidden value="{{$id}}"/>
                @foreach ($inputfields as $field)
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="{{$field['lower']}}">
                            {{$field['upper']}}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="{{$field['lower']}}" id="{{$field['lower']}}" type="{{$field['type']}}" placeholder="{{$field['upper']}}">
                    </div>
                @endforeach
                <input type="submit" class="mt-4 inline-block border-2 border-yellow-400 hover:bg-yellow-400 duration-200 text-black font-bold py-2 px-6 rounded-full" value="Verstuur"/>
            </form>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; 2023 KoffieVerhuur. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
