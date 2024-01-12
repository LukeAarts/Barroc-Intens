@extends('layouts.app')

@section('content')

    <h1>Bedrijfsinfo van {{ $user->name }}</h1>

    <table class="table-auto border-collapse border">
        <thead>
            <tr>
                <th class="border py-2 px-4">ID</th>
                <th class="border py-2 px-4">Bedrijfsnaam</th>
                <th class="border py-2 px-4">Straat</th>
                <th class="border py-2 px-4">Huisnummer</th>
                <th class="border py-2 px-4">Postcode</th>
                <th class="border py-2 px-4">Stad</th>
                <th class="border py-2 px-4">Telefoonnummer</th>
                <th class="border py-2 px-4">BKR Check</th>
                <th class="border py-2 px-4">BKR gecheckt op</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td class="border py-2 px-4">{{$company->id}}</td>
                    <td class="border py-2 px-4">{{$company->name}}</td>
                    <td class="border py-2 px-4">{{$company->street}}</td>
                    <td class="border py-2 px-4">{{$company->house_number}}</td>
                    <td class="border py-2 px-4">{{$company->zipcode}}</td>
                    <td class="border py-2 px-4">{{$company->city}}</td>
                    <td class="border py-2 px-4">{{$company->phonenumber}}</td>
                    <td class="border py-2 px-4">
                    
                        <form method="post" action="{{ route('finances.update', $company->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $company->id }}">
                            <div class="flex items-center">
                                <input type="checkbox" name="bkr_checked" {{ $company->bkr_checked ? 'checked' : '' }}>
                                <button type="submit" class="text-black ml-2">Opslaan</button>
                            </div>
                        </form>
                    </td>
                    <td class="border py-2 px-4">{{$company->bkr_checked_at}}</td>

                    <td class="border py-2 px-4">
                    <a href="{{ route('notes.editCompany', $company->id) }}" class="text-blue-500">Bewerk</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Notities van {{ $user->name }}</h2>
    @if ($notes->count() > 0)
        <ul>
            @foreach($notes as $note)
                <li>
                    <p>{{ $note->note }}</p>
                    <p>Aangemaakt op: {{ $note->date }}</p>
                    <a href="{{ route('notes.edit', ['note' => $note]) }}">Bewerken</a>
                    <a href="{{ route('notes.destroy', ['note' => $note]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $note->id }}').submit();">Verwijder</a>

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
