@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 text-white p-4">
        <div class="overflow-x-auto w-auto px-64">

            <h1 class="text-2xl font-bold mb-4">Bedrijfsinfo van {{ $user->name }}</h1>

            @if($companies->count() > 0)
                <table class="table-auto border-collapse border mb-4">
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
                            <th class="border py-2 px-4">Bewerken</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            @if($company->user_id == $user->id)
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
                                    <td class="border py-2 px-4">
                                        <a href="{{ route('notes.editCompany', $company->id) }}" class="text-blue-500">Bewerk</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Geen bedrijfsinformatie beschikbaar voor {{ $user->name }}</p>
            @endif

            <h2 class="text-2xl font-bold mb-4">Notities van {{ $user->name }}</h2>

            @if ($notes->count() > 0)
                <ul class="mb-4">
                    @foreach($notes as $note)
                        <li class="border p-4 rounded mb-4">
                            <p>{{ $note->note }}</p>
                            <p>Aangemaakt op: {{ $note->date }}</p>
                            <a href="{{ route('notes.edit', ['note' => $note]) }}" class="text-blue-500">Bewerken</a>
                            <a href="{{ route('notes.destroy', ['note' => $note]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $note->id }}').submit();" class="text-red-500 ml-2">Verwijderen</a>

                            <form id="delete-form-{{ $note->id }}" action="{{ route('notes.destroy', ['note' => $note]) }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('notes.create', ['user_id' => $user->id]) }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Nieuwe Notitie Toevoegen</a>
                <a href="{{ route('notes.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded">Terug naar Gebruikers</a>
            @else
                <p>Geen notities beschikbaar voor {{ $user->name }}</p>
                <a href="{{ route('notes.create', ['user_id' => $user->id]) }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4">Nieuwe Notitie Toevoegen</a>
                <a href="{{ route('notes.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded">Terug naar Gebruikers</a>
            @endif
        </div>
    </div>
@endsection
