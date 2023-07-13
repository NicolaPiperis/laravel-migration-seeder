<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @foreach ($train_paths as $train_path)
        <div>
            {{ $train_path['azienda'] }};
            Da:{{ $train_path['stazione_di_partenza'] }} e diretto a:
            {{ $train_path['stazione_di_arrivo'] }}
        </div>
    @endforeach

</body>

</html>
