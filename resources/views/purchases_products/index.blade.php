<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
<div class="max-w-5xl mx-auto bg-white p-8 rounded shadow">
    <header class="flex justify-space-between">
        <h1 class="text-2xl font-bold mb-8">Mijn Winkel</h1>
        <a href="#" class="text-2xl font-light ml-16">Voorraad</a>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
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
            <th class="border py-2 px-4">Categorie ID</th>
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
                <td>{{$product->product_category_id}}</td>
                {{-- <td>{{$post->category->name}}</td>
                <td>{{$post->description}}</td> --}}

                {{-- <td><a href="{{ route('posts.edit', $post) }}" class="text-black">Bewerken</a></td>
                <td>
                    <form method="post" action="{{ route('posts.destroy', $post)}}">
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

</body>
</html>