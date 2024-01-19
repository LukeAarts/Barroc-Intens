@extends('layouts.app')

@section('content')
    <h1>Bewerk Bedrijfsinformatie</h1>

    <form method="post" action="{{ route('notes.updateCompany', $company->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Bedrijfsnaam:</label>
        <input type="text" name="name" value="{{ $company->name }}" required>

        <label for="street">Straat:</label>
        <input type="text" name="street" value="{{ $company->street }}" required>

        <label for="house_number">Huisnummer:</label>
        <input type="text" name="house_number" value="{{ $company->house_number }}" required>

        <label for="zipcode">Postcode:</label>
        <input type="text" name="zipcode" value="{{ $company->zipcode }}" required>

        <label for="city">Stad:</label>
        <input type="text" name="city" value="{{ $company->city }}" required>

        <label for="phonenumber">Telefoonnummer:</label>
        <input type="text" name="phonenumber" value="{{ $company->phonenumber }}" required>

        <!-- Voeg hier andere velden toe -->

        <button type="submit">Wijzigingen Opslaan</button>
    </form>
@endsection
