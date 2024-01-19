<h1>Klant Aanmaken</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form method="post" action="{{ route('customers.store') }}">
    @csrf

    <label for="name">Naam:</label>
    <input type="text" name="name" value="{{ old('name') }}" required>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Voeg andere formulierinvoervelden toe indien nodig -->

    <button type="submit">Klant Aanmaken</button>
</form>