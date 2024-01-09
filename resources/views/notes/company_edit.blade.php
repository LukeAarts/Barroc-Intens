@extends('layouts.app')

@section('content')
    <h1>Bewerk Bedrijfsgegevens voor {{ $user->name }}</h1>

    <form action="{{ route('notes.update', $user) }}" method="post">
        @csrf
        @method('PATCH')

        <!-- Voeg hier de velden toe voor het bewerken van de bedrijfsinformatie -->
        <!-- Voorbeeld: -->
        <label for="company_name">Bedrijfsnaam:</label>
        <input type="text" name="company_name" id="company_name" value="{{ $user->company->name }}" required>

        <label for="street">Straat:</label>
        <input type="text" name="street" id="street" value="{{ $user->company->street }}" required>

        <!-- Voeg andere velden toe zoals huisnummer, postcode, stad, telefoonnummer, etc. -->

        <br>
        <button type="submit">Opslaan</button>
    </form>
    <a href="{{ route('notes.index') }}">Terug naar klanten</a>
@endsection
