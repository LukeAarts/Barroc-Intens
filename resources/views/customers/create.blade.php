@extends('layouts.app')

@section('content')
    <h1>Klant Aanmaken</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('customers.store') }}">
        @csrf

        <label for="name">Naam:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="email">E-mail:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="street">Straat:</label>
        <input type="text" name="street" value="{{ old('street') }}" required>
        @error('street')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="houseNumber">Huisnummer:</label>
        <input type="text" name="houseNumber" value="{{ old('houseNumber') }}" required>
        @error('houseNumber')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="zipcode">Postcode:</label>
        <input type="text" name="zipcode" value="{{ old('zipcode') }}" required>
        @error('zipcode')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="city">Plaats:</label>
        <input type="text" name="city" value="{{ old('city') }}" required>
        @error('city')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="phonenumber">Telefoonnummer:</label>
        <input type="text" name="phonenumber" value="{{ old('phonenumber') }}" required>
        @error('phonenumber')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Add other form input fields if needed -->

        <button type="submit">Klant Aanmaken</button>
    </form>
@endsection
