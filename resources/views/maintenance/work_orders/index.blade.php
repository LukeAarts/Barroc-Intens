<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Werkbonnen Overzicht</title>
</head>
<body>
    
    
  
 
    <h1>Werkbonnen Overzicht</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Work Order Date</th>
                <th>Gebruikt materiaal</th>
                <th>Hoeveel</th>
                <th>Wie:</th>
                <!-- Voeg hier extra kolommen toe op basis van je datamodel -->
            </tr>
        </thead>
        <tbody>
            @foreach ($workOrders as $workOrder)
                <tr>
                    <td>{{ $workOrder->id }}</td>
                    <td>{{ $workOrder->title }}</td>
                    <td>{{ $workOrder->description }}</td>
                    <td>{{ $workOrder->work_order_date }}</td>
                    <td>
                        @foreach ($workOrder->materials as $material)
                        {{ $material->name }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($workOrder->materials as $material)
                            {{ $material->pivot->material_amount }}
                        @endforeach
                    </td>
                    <td>
                        @if ($workOrder->user)
                            {{ $workOrder->user->name }}
                        @else
                            Geen gebruiker toegewezen
                        @endif
                    </td>
                    <!-- Voeg hier extra kolommen toe op basis van je datamodel -->
                </tr>
            @endforeach
        </tbody>
    </table>
  
   
</body>
</html>
