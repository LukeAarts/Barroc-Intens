<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koffiemachine Verhuur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-sans">

<!-- Navigatiebalk -->
<nav class="bg-black p-4 text-white">
    <div class="container mx-auto flex items-center w-full">
        <a href="{{route('home')}}" class="text-4xl font-bold">Barroc Intens</a>
        <ul class="flex ml-24 space-x-4 text-xl font-light">
            <li><a href="{{route('home')}}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{route('products.index')}}" class="hover:text-gray-300">Machines</a></li>
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
<!-- Navigatiebalk -->
<nav class="bg-black p-4 text-white">
    <div class="container mx-auto flex items-center w-full">
        <ul class="flex ml-24 space-x-4 text-xl font-light">
            @if(\Illuminate\Support\Facades\Auth::user() != null)
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Inventory') || \Illuminate\Support\Facades\Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('purchases_products.index')}}" class="{{ request()->is('purchases_products*') ? 'bg-white text-black px-2 py-1 rounded-md hover:bg-gray-300 ' : '' }}">Voorraad</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Sales') || \Illuminate\Support\Facades\Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('notes.index')}}" class="{{ request()->is('notes*') ? 'bg-white text-black px-2 py-1 rounded-md hover:bg-gray-300 ' : '' }}">Klanten</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Finance') || \Illuminate\Support\Facades\Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('finances.index')}}" class="{{ request()->is('finances*') ? 'bg-white text-black px-2 py-1 rounded-md hover:bg-gray-300 ' : '' }}">Finance</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Finance') || \Illuminate\Support\Facades\Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('quote.index')}}" class="{{ request()->is('quote*') ? 'bg-white text-black px-2 py-1 rounded-md' : '' }}">Offertes</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Finance') || \Illuminate\Support\Facades\Auth::user()->hasRole('Admin'))
                    <li><a href="{{route('invoice.index')}}" class="{{ request()->is('invoice*') ? 'bg-white text-black px-2 py-1 rounded-md hover:bg-gray-300 ' : '' }}">Facturen</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('Customer') || \Illuminate\Support\Facades\Auth::user()->hasRole('Customer'))
                    <li><a href="{{route('customers.invoices')}}" class="{{ request()->is('customers*') ? 'bg-white text-black px-2 py-1 rounded-md hover:bg-gray-300 ' : '' }}">Facturen</a></li>
                @endif
                
            @endif
        </ul>
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

