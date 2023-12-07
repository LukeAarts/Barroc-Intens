@extends('layouts.app')

@section('content')
    <h1>Aantekening Weergeven</h1>
    <p>{{ $note->note }}</p>
    <p>Toegevoegd op: {{ $note->date }}</p>
    <p>Auteur: {{ $note->author ? $note->author->name : 'Onbekende Auteur' }}</p>
    <a href="{{ route('notes.edit', $note) }}">Bewerken</a>
    <a href="{{ route('notes.index') }}">Terug naar Aantekeningen</a>

@endsection
