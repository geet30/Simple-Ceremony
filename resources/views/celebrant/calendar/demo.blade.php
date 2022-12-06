<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fullcalendar/main.css">
    <!-- <link rel="stylesheet" href="./fullcalendar/calendar.css"> -->
</head>
<body>
    <div id='calendar-js'></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./fullcalendar/main.js"></script>
    <script src="./fullcalendar/init.js"></script>
    <script>
    initCalander('calendar-js',@json($booking))
    </script>
</body>
</html>