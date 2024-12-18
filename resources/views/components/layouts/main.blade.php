<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS441</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <x-layouts.nav-bar></x-layouts.nav-bar>
    {{ $slot }}
</html>
