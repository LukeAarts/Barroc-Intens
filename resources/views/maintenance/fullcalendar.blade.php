<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullCalendar in HTML</title>
    <link rel="stylesheet" href="https://unpkg.com/@fullcalendar/core/main.css" integrity="sha384-rHmbdTRVo7LK9GSLFnBiI4VIefS3k6ymy2wPnT17LXOBWxh/Xrj4oefDYTkQ9Zjr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.css" integrity="sha384-K8I1IpFgZ5mrTS3WQvmj/Bp7k8V3DNNOzST2/4CQCZQVt/Gr1UxyTQsEfjNU2A6w" crossorigin="anonymous">
</head>
<body>
    <div id="calendar"></div>

    <script src="https://unpkg.com/@fullcalendar/core/main.min.js" integrity="sha384-4Gr52RTEbcjowYvHRjLlFy2QIzH4JS7uVUQudHTDAZfPeBwlSZ/9sz+AlCeeQQsx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid/main.min.js" integrity="sha384-tfwwd7rlxVFO6fBQe8GzL4ivR0sDzNKYE/pWpE6GLp9YRRBAIj5KAR5+MGnVeDpN" crossorigin="anonymous"></script>

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