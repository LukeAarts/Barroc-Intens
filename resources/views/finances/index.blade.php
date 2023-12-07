@extends('layouts.app')
@section('content')

    <div class="max-w-5xl mx-auto bg-white p-8 rounded shadow">
    <header class="flex justify-space-between">
        <h1 class="text-2xl font-bold mb-8">Finances</h1>
        <a href="#" class="text-2xl font-light ml-16">Bedrijven</a>
    </header>
    <table class="w-full border">
        <thead>
        <tr>
            <th class="border py-2 px-4">ID</th>
            <th class="border py-2 px-4">Bedrijfsnaam</th>
            <th class="border py-2 px-4">Straat</th>
            <th class="border py-2 px-4">Huisnummer</th>
            <th class="border py-2 px-4">Postcode</th>
            <th class="border py-2 px-4">Stad</th>
            <th class="border py-2 px-4">Telefoonummer</th>
            <th class="border py-2 px-4">BKR Check</th>
            <th class="border py-2 px-4">BKR gecheckt op</th>
        </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->street}}</td>
                <td>{{$company->house_number}}</td>
                <td>{{$company->zipcode}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->phonenumber}}</td>
                <td>
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

                {{-- <td>
                    <form method="post" action="{{ route('products.destroy', $product)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td> --}}
            </tr>
        @endforeach
        </tbody>
    </table>

</div>


@endsection
