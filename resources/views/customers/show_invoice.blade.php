@extends('layouts.app')
@section('content')
    <div class="container mx-auto w-full">
        <div class="items-center">
            <div class="grid grid-cols-2 gap-4 w-full">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Details:</h2>
                        <p>Naam: {{$customer->name}}</p>
                        <p>Datum: {{$invoice->date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
