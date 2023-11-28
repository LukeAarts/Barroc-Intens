@extends('layouts.app')

@section('content')
    <h1>Aantekening Bewerken</h1>
    <form action="{{ route('notes.update', $note) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="note">Aantekening:</label>
        <textarea name="note" id="note" rows="4" required>{{ $note->note }}</textarea>
        <br>
        <button type="submit">Opslaan</button>
    </form>
    <form action="{{ route('notes.destroy', $note) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijderen</button>
    </form>
    <a href="{{ route('notes.index') }}">Terug naar Aantekeningen</a>
@endsection
