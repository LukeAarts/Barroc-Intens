<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Details van {{$maintenanceAppointment->title}}</h1>
    <p><strong>Naam:</strong> {{$maintenanceAppointment->title}}</p>
    <p><strong>Start datum:</strong> {{$maintenanceAppointment->start_date}}</p>
    <p><strong>Eind datum:</strong> {{$maintenanceAppointment->end_date}}</p>
    <p><strong>Opmerkingen:</strong> {{$maintenanceAppointment->remark}}</p>
    <p><strong>Type:</strong> {{$maintenanceAppointment->maintenance_type}}</p>
    <a href="{{ route('maintenance.edit', $maintenanceAppointment->id) }}" class="btn btn-primary">Bewerk</a>
</body>
</html>