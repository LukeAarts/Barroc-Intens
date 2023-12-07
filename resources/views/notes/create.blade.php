<h1>Nieuwe Aantekening Toevoegen</h1>
<form action="{{ route('notes.store') }}" method="post">
    @csrf
    <label for="note">Aantekening:</label>
    <textarea name="note" id="note" rows="4" required></textarea>
    <br>
    <label for="author_id">Selecteer Gebruiker:</label>
    <select name="author_id" id="author_id" required>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Opslaan</button>
</form>
<a href="{{ route('notes.index') }}">Terug naar Aantekeningen</a>