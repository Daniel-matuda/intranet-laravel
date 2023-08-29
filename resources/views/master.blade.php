<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-6c5a4d63.css') }}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/tailwind.css'])
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    {{-- <script src="{{ asset('build/assets/app-00b433d6.js') }}"></script> --}}
</body>

</html>
