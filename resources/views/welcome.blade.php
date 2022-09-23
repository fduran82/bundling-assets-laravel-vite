<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            <div class="py-8 w-full text-center">
                <h1 class="text-4xl font-bold text-amber-400">
                    Hello, Vite!
                </h1>
                <h2>Welcome <span>SASS</span></h2>
                <example-component name="on vite" />
            </div>
        </div>
    </body>
</html>
