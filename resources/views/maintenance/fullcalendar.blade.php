<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar in HTML</title>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
</head>
<body>
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach($maintenance_errors_planned as $event)
                        {
                            title: '{{ $event->title }}',
                            start: '{{ $event->start_date }}',
                            end: '{{ $event->end_date }}',
                        },
                    @endforeach
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>
