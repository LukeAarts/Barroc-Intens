<!-- resources/views/maintenance/create.blade.php -->

<div class="container mt-4">
    <form method="POST" action="{{ route('maintenance.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Titel:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="start_date">Startdatum:</label>
            <input type="datetime-local" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">Einddatum:</label>
            <input type="datetime-local" name="end_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="company_id">Bedrijf:</label>
            <select name="company_id" class="form-control" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="remark">Opmerking:</label>
            <textarea name="remark" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="product_category_id">Productcategorie:</label>
            <select name="product_category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="maintenance_type">Onderhoudstype:</label>
            <select name="maintenance_type" class="form-control" required>
                @foreach($maintenanceTypes as $type)
                    <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="assigned">Toegewezen medewerker:</label>
            <select name="assigned" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
