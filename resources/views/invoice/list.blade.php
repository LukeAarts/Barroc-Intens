@extends('layouts.app')
@section('content')
    <div class="overflow-x-auto w-auto px-64">
        <table id="table" class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>Klant</th>
                <th>Product</th>
                <th>Bedrijfsnaam</th>
                <th>Prijs</th>
                <th>Datum</th>
                <th>Bekijk</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            @foreach($invoices as $invoice)
                <tr>
                    <td>
                        #{{$invoice->id}}
                    </td>
                    <td>
                        {{$invoice->customer->name}}
                    </td>
                    <td>
                        {{$invoice->product_id}}
                    </td>
                    <td>
                        {{$invoice->quotation->companyname}}
                    </td>
                    <td>
                        {{$invoice->install_cost}}
                    </td>
                    <td>
                        {{$invoice->created_at}}
                    </td>
                    <td>
                        <a href="{{route('invoice.edit', $invoice->id)}}" class="btn btn-primary">Bekijk</a>
                    </td>
                </tr>
            @endforeach
            <script>
                let table = new DataTable('#table');
            </script>
            </tbody>
        </table>
    </div>
@endsection
