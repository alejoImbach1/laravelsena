@props(['tituloPagina' => 'Sena laravel'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tituloPagina }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    @stack('links')
</head>

<body>
    @session('alert')
        <x-alert :type="$value['type']" :message="$value['message']" id="divAlert"/>
        <script>
            divAlert = document.getElementById('divAlert');
            setTimeout(function() {
                divAlert.remove();
            }, 3500);
        </script>
    @endsession
    {{ $slot }}
    <script src="https://kit.fontawesome.com/0062b0aa7f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
