<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ config('app.name', 'default') }}</title>
</head>
<body class="h-full bg-neutral-200 dark:bg-neutral-900 dark:text-neutral-950 text-neutral-950">

    <x-header></x-header>

    <?php /*echo $slot; */?>
    {{ $slot }}
</body>
</html>
