@extends('layouts.app')

@section('content')
    <h1>Notities van {{ $user->name }}</h1>

    @if ($notes)
        <ul>
            @foreach($notes as $note)
                <li>
                    <p>{{ $note->note }}</p>
                    <p>Aangemaakt op: {{ $note->date }}</p>
                    <a href="{{ route('notes.destroy', ['note' => $note]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $note->id }}').submit();">Verwijder</a>

                    <!-- Verwijderingsformulier verbergen -->
                    <form id="delete-form-{{ $note->id }}" action="{{ route('notes.destroy', ['note' => $note]) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('notes.create', ['user_id' => $user->id]) }}">Nieuwe Notitie Toevoegen</a>
        <a href="{{ route('notes.index') }}">Terug naar Gebruikers</a>
    @else
        <p>Geen notities beschikbaar voor {{ $user->name }}</p>
        <a href="{{ route('notes.create', ['user_id' => $user->id]) }}">Nieuwe Notitie Toevoegen</a>
        <a href="{{ route('notes.index') }}">Terug naar Gebruikers</a>
    @endif

@endsection
