@extends('layouts.app')
@section('content')

<body class="bg-gray-100 p-4">
<div class="max-w-5xl mx-auto bg-white p-8 rounded shadow">
    <header class="flex justify-space-between">
        <h1 class="text-2xl font-bold mb-8">Mijn Winkel</h1>
        <a href="#" class="text-2xl font-light ml-16">Voorraad</a>
    </header>
    <table class="w-full border">
        <thead>
        <tr>
            <th class="border py-2 px-4">ID</th>
            <th class="border py-2 px-4">Naam</th>
            <th class="border py-2 px-4">Omschrijving</th>
            <th class="border py-2 px-4">Afbeelding</th>
            <th class="border py-2 px-4">Prijs</th>
            <th class="border py-2 px-4">Voorraad</th>
            <th class="border py-2 px-4">Categorie</th>
            <th class="border py-2 px-4">Bewerken</th>
            <th class="border py-2 px-4">Verwijderen</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td><img style="width: 100px" src="{{asset('storage/' . $product->image_path)}}" alt=""></td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->category->name}}</td>
                <td><a href="{{ route('purchases_products.edit', $product) }}" class="text-black">Bewerken</a></td>
                <td>
                    <form method="post" action="{{ route('products.destroy', $product)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('purchases_products.create')}}">Nieuw</a>

</div>

@endsection
