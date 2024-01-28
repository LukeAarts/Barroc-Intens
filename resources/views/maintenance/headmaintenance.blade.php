@extends('layouts.app')
@section('content')
   <h1>Onderhoudsafspraken</h1>
   <table>
       <thead>
           <tr>
               <th>ID</th>
               <th>Opmerking</th>
               <th>Bedrijf</th>
               <th>Categorie</th>
               <th>Type onderhoud</th>
               <th>Datum toegevoegd</th>
           </tr>
       </thead>
       <tbody>
           @foreach($maintenanceAppointments as $appointment)
               <tr>
                   <td>{{ $appointment->id }}</td>
                   <td>{{ $appointment->remark }}</td>
                   <td>{{ $appointment->company->name }}</td>
                   <td>{{ $appointment->product_category->name }}</td>
                   <td>{{ $appointment->maintenance_type }}</td>
                   <td>{{ $appointment->date_added }}</td>
               </tr>
           @endforeach
       </tbody>
   </table>


   <h1>storings aanvragen</h1>
   <table>
    <thead>
        <tr>
            <th>titel</th>
            <th>beschrijving</th>
            <th>opmerkingen</th>
            <th>klant</th>
            <th>bedrijf</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($malfunctionRequests as $malfunctionRequest)
            <tr>
                <td>{{ $malfunctionRequest->title }}</td>
                <td>{{ $malfunctionRequest->description }}</td>
                <td>{{ $malfunctionRequest->comments }}</td>
                <td>{{ optional($malfunctionRequest->user)->name }}</td>
                <td>{{ optional($malfunctionRequest->company)->name }}</td>
            
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
