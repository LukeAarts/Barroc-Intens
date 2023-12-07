@extends('layouts.guest')
@section('content')
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-8">Onze Producten</h2>
        </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-bit-deluxe.png" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Bit Deluxe</h3>
            <p>Deze deluxe machine is de shit!</p>
            <a href="{{route('quote.show', 1)}}" class="mt-4 inline-block border-2 border-yellow-400 hover:bg-yellow-400 duration-200 text-black font-bold py-2 px-6 rounded-full">Offerte</a>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-bit-light.png" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Bit Light</h3>
            <p>Machine Bit Light. Topkwaliteit van ons bedrijf!</p>
            <a href="{{route('quote.show', 2)}}" class="mt-4 inline-block border-2 border-yellow-400 hover:bg-yellow-400 duration-200 text-black font-bold py-2 px-6 rounded-full">Offerte</a>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <img src="images/machine-groot.jpg" class="w-54 rounded-md drop-shadow-lg" alt="afbeelding">
            <h3 class="text-xl font-bold mb-2">Machine Groot</h3>
            <p>Hele grote machine voor heel veel mensen!</p>
            <a href="{{route('quote.show', 3)}}" class="mt-4 inline-block border-2 border-yellow-400 hover:bg-yellow-400 duration-200 text-black font-bold py-2 px-6 rounded-full">Offerte</a>
        </div>
      </div>
    </div>
@endsection
