<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PWP | POK</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('components.navbar')
@yield('content')
@include('components.footer')
</body>
</html>
