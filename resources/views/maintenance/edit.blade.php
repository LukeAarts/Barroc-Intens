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

            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" id="title" name="title" value="{{ $maintenanceAppointment->title }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="start_date">Startdatum:</label>
                <input type="datetime-local" id="start_date" name="start_date" value="{{ \Carbon\Carbon::parse($maintenanceAppointment->start_date)->format('Y-m-d\TH:i') }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="end_date">Einddatum:</label>
                <input type="datetime-local" id="end_date" name="end_date" value="{{ \Carbon\Carbon::parse($maintenanceAppointment->end_date)->format('Y-m-d\TH:i') }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="company_id">Bedrijf:</label>
                <select name="company_id" class="form-control" required>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ $maintenanceAppointment->company_id == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="remark">Opmerking:</label>
                <textarea id="remark" name="remark" class="form-control" required>{{ $maintenanceAppointment->remark }}</textarea>
            </div>

            <div class="form-group">
                <label for="product_category_id">Productcategorie:</label>
                <select name="product_category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $maintenanceAppointment->product_category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="maintenance_type">Onderhoudstype:</label>
                <select name="maintenance_type" class="form-control" required>
                    @foreach($maintenanceTypes as $type)
                        <option value="{{ $type }}" {{ $maintenanceAppointment->maintenance_type == $type ? 'selected' : '' }}>
                            {{ ucfirst($type) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="assigned">Toegewezen medewerker:</label>
                <select name="assigned" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $maintenanceAppointment->assigned == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
</body>
</html>
