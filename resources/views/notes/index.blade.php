@extends('layouts.app')

@section('content')
    <h1>Gebruikers en Notities</h1>
    <ul>
        @foreach($users as $user)
            <li>
                <p>{{ $user->name }}</p>
                <a href="{{ route('user.notes', $user) }}">Bekijk Notities</a>
                <a href="{{ route('notes.create', ['user_id' => $user->id]) }}">Maak Notitie</a>
            </li>
        @endforeach
    </ul>

@endsection
