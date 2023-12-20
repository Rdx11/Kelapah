<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelapah</title>
    <link rel="icon" href="{{ asset('frontend/aset/logo/PureLogo.png') }}" type="image/x-icon" />

    <!-- css -->
    <link href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Preahvihear&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    @include('frontend.layout.navbar')

    @yield('content')

    @include('frontend.layout.footer')
    <script src="{{ asset('frontend//bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>