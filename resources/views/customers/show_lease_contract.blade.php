@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center">
    <div class="bg-white p-4 shadow-md rounded-md max-w-[210mm] max-h-[297mm] w-full">
        <h2 class="text-2xl font-bold mb-4 border-b pb-2">Contract en Klant Details</h2>
        <div>
            <ul>
                <li><strong>Naam contract:</strong> {{ $contract->name }}</li>
                <li><strong>Beschrijving:</strong> {{ $contract->description }}</li>
                <li><strong>Startdatum:</strong> {{ $contract->start_date }}</li>
                <li><strong>Einddatum:</strong> {{ $contract->end_date }}</li>
                <li><strong>Type:</strong> {{ $contract->type }}</li>
                <li><strong>Ondertekend:</strong> @if ($contract->is_signed) Ja @else Nee @endif</li>
            </ul>
        </div>
        <div class="mt-4">
            <ul>
                <li><strong>Naam klant:</strong> {{$customer->name}}</li>
                <!-- Voeg hier meer klantdetails toe op basis van je eigen gegevens -->
            </ul>
        </div>
    </div>
</div>
@endsection
