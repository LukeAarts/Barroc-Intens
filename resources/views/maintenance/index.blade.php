@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Welkom bij Maintenance</div>

                <div class="card-body">
                    <p class="lead">Welkom op het Maintenance-platform. Hier kun je onderhoudsafspraken bekijken en beheren met de juiste rechten.</p>
                    <p>Als je een hoofdonderhoudsmedewerker of een beheerder bent, heb je toegang tot alle afspraken.</p>
                    <p>Als je een onderhoudsmedewerker bent, heb je toegang tot het maken van werkbonnen.</p>

                    <div class="text-center mt-4">
                        @if(auth()->check() && (auth()->user()->role === 'Headmaintenance' || auth()->user()->role === 'Admin'))
                            <a href="{{ route('maintenance.headmaintenance') }}" class="btn btn-primary">Bekijk alle afspraken</a>
                        @else
                            <p class="mb-0">Je moet ingelogd zijn als iemand met de rechten om de afspraken te kunnen bekijken.</p>
                            <a href="{{ route('login') }}" class="btn btn-primary mt-2">Inloggen</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection