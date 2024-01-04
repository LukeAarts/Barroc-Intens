<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar in HTML</title>
    <!-- Voeg Bootstrap CSS toe voor stijlverbeteringen -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
</head>
<body>
    <div class="container mt-4">
        <div id="calendar"></div>
    </div>    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    @foreach($maintenanceAppointments as $event)
                        {
                            id: '{{ $event->id }}', // Voeg een uniek ID toe aan elk evenement
                            title: '{{ $event->title }}',
                            start: '{{ $event->start_date }}',
                            end: '{{ $event->end_date }}',
                            backgroundColor: '{{ $event->background_color }}', // Voeg indien nodig kleur toe
                        },
                    @endforeach
                ],
                editable: true,
                eventClick: function(info) {
                console.log('Event Clicked:', info);

                const title = info.event.title;
                const start = info.event.start ? info.event.start.toLocaleString() : 'N/A';
                const end = info.event.end ? info.event.end.toLocaleString() : 'N/A';

                alert(`Naam: ${title}\nStart: ${start}\nEinde: ${end}`);
            },
            });
            calendar.render();
        });
    </script>    
</body>
</html>
