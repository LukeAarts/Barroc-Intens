
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>werkbon aanmaken</h1>

        <form action="" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantity">description:</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            @foreach ($materials as $material)
                
            <div class="form-group">
                <label for="quantity">{{$material->name}}</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            @endforeach
            

            <button type="submit" class="btn btn-success">Opslaan</button>
        </form>
    </div>
@endsection