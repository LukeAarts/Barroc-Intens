<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar in HTML</title>
    <link rel="stylesheet" href="https://unpkg.com/@fullcalendar/core/main.css" integrity="sha384-d3lqXu1MA+7zI3X1Uaek6qjsZo1b6XI5l3P0RZvqR6gzQkH6v4t9Iw3crVIjA15l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.css" integrity="sha384-7jnNO2Np8j8Uso5fJq1sj2XCElKRGR9upHFlI7+8oJ8zad5tiKyD9rvMxTtD1bc5" crossorigin="anonymous">
</head>
<body>
    <div id="calendar"></div>

    <script src="https://unpkg.com/@fullcalendar/core/main.min.js" integrity="sha384-HDDL8WBA+eAOqHRfyZ9VpJZ1sK6U3u2CG+WEzn9r+7Iz+nkzqLheSZjlPd+tr1Fj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid/main.min.js" integrity="sha384-d91BBR3x2Qvq6qLrZr9/6zzPPg44y8vqpvcP9M+AVngpXYbpQsPrFK4DH0eM5Kld" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    // voeg hier je evenementen toe in het juiste formaat
                    // { title: 'Evenement 1', start: '2023-01-01' },
                    // { title: 'Evenement 2', start: '2023-01-02' },
                    // ...
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>