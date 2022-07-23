<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="grid grid-cols-2 gap-4 bg-red-200">
            <div class="grid justify-center h-56">Hello</div>
            <div class="grid place-items-center">
                <div class="grid grid-cols-2 gap-4 place-items-center h-48 w-40">
                    <div>01</div>
                    <div>02</div>
                    <div>03</div>
                    <div>04</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>