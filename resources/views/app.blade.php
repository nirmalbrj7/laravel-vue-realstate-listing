<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue Realstate</title>

    </head>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
    <body>
    @inertia
    </body>
</html>
