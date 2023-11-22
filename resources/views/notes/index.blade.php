@extends('layouts.app')

@section('content')
    <h1>Aantekeningen</h1>
    <ul>
        @foreach($notes as $note)
            <li>
                <p>{{ $note->note }}</p>
                <a href="{{ route('notes.show', $note) }}">Details</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('notes.create') }}">Nieuwe Aantekening Toevoegen</a>
@endsection
