<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div id="app">
            <example-component></example-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
