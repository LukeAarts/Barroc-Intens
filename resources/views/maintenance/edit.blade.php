<!-- resources/views/maintenance/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk Afspraak</title>
    <!-- Voeg Bootstrap CSS toe voor stijlverbeteringen -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Bewerk Afspraak: {{ $maintenanceAppointment->title }}</h1>
        <form method="post" action="{{ route('maintenance.update', $maintenanceAppointment->id) }}">
            @csrf
            @method('PUT')

            <!-- Voeg hier formuliervelden toe om de gegevens te bewerken -->
            <!-- Voorbeeld: -->
            <label for="title">Naam:</label>
            <input type="text" id="title" name="title" value="{{ $maintenanceAppointment->title }}" required>

            <!-- Voeg hier andere formuliervelden toe voor andere attributen -->

            <button type="submit">Opslaan</button>
        </form>
    </div>
</body>
</html>
