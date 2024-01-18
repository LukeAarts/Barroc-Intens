@extends('layouts.app')
@section('content')

<body class="bg-gray-100 p-4">
<div class="overflow-x-auto w-auto px-64">
    <table id="table" class="table">
        <thead>
        <tr>

        </tr>
        </thead>
    </table>
        <script>
            let table = new DataTable('#table');
        </script>
</div>
@endsection
