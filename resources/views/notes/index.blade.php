@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 text-white p-4">
        <div class="overflow-x-auto w-auto px-64">
            <h1 class="text-2xl font-bold mb-4">Gebruikers en Notities</h1>
            
            <a href="{{ route('customers.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Nieuwe Klant Toevoegen</a>
            
            <ul class="space-y-4">
                @foreach($users as $user)
                    <li class="border p-4 rounded">
                        <p class="font-semibold">{{ $user->name }}</p>
                        <a href="{{ route('user.notes', $user) }}" class="text-blue-500 hover:underline">Bekijk Klant</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
