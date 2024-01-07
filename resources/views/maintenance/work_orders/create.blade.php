@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welkom, {{ Auth::user()->name }}</h1>

        <h2>Werkbon aanmaken</h2>

        <form action="{{route('work_orders.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="work_order_date">Datum:</label>
                <input type="date" name="work_order_date" id="work_order_date" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="material">Kies een materiaal</label>
                <select name="material" id="material" class="form-control" required>
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->name }}</option>
                    @endforeach
                </select>
            </div>

            <div id="addedMaterials">
                <!-- Hier worden de toegevoegde materialen weergegeven -->
            </div>

            <button type="button" class="btn btn-primary" id="addItemBtn">Toevoegen</button>
            <button type="submit" class="btn btn-success">Opslaan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Houd bij hoeveel items er zijn toegevoegd
            var itemCount = 0;

            // Wanneer op de knop 'Toevoegen' wordt geklikt
            $("#addItemBtn").click(function() {
                // Verkrijg de geselecteerde waarde en tekst van het materiaal
                var materialId = $("#material").val();
                var materialName = $("#material option:selected").text();

                // Voeg een nieuw invoerveld toe aan de lijst met toegevoegde materialen
                $("#addedMaterials").append(
                    '<div class="addedMaterial" id="addedMaterial' + itemCount + '">' +
                        '<div class="form-group">' +
                            '<label for="material_amount' + itemCount + '">' + materialName + '</label>' +
                            '<input type="number" name=material_amount[' + materialId + ']" id="material_amount' + itemCount + '" class="form-control" required>' +
                        '</div>' +
                        '<button type="button" class="btn btn-danger removeItemBtn" data-item-id="' + itemCount + '">Verwijderen</button>' +
                    '</div>'
                );

                // Incrementeer de teller voor het bijhouden van het aantal toegevoegde items
                itemCount++;
            });

            // Wanneer op de knop 'Verwijderen' wordt geklikt
            $(document).on("click", ".removeItemBtn", function() {
                var itemId = $(this).data("item-id");

                // Verwijder het bijbehorende toegevoegde materiaal
                $("#addedMaterial" + itemId).remove();
            });
        });
    </script>
@endsection
