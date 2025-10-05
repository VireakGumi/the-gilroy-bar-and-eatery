<!DOCTYPE html>
<html lang="en">
    <!-- Fonts & Icons -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gilroy Bar')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')
</head>

<body>

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome JS -->
    <script src="{{ asset('fontawesome-free/js/all.min.js') }}"></script>

    <!-- JS Content -->
    @yield('js')
</body>

</html>
