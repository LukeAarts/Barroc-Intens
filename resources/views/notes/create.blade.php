@extends('layouts.app')

@section('content')
    <h1>Nieuwe Aantekening Toevoegen</h1>
    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        <label for="note">Aantekening:</label>
        <textarea name="note" id="note" rows="4" required></textarea>
        <br>
        <label for="user">Selecteer Gebruiker:</label>
        <select name="user" id="user" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Opslaan</button>
    </form>
    <a href="{{ route('notes.index') }}">Terug naar Aantekeningen</a>
@endsection
