<!DOCTYPE html>
<html lang="en">
<!-- Fonts & Icons -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gilroy Bar')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')

    <!-- ✅ Open Graph for SEO & Social -->
    <meta property="og:title" content="The Gilroy Bar Restaurant Bay St Port Melbourne">
    <meta property="og:description"
        content="At The Gilroy, we invite you to savour exquisite dishes crafted with passion, from Italian pastas, all served in an ambience that whispers elegance.">
    <meta property="og:image" content="https://www.thegilroy.au/images/logo-no-bg.png">
    <meta property="og:url" content="https://www.thegilroy.au">
    <meta property="og:type" content="website">

    <!-- ✅ Structured Data (Logo Schema) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "The Gilroy Bar",
            "url": "https://www.thegilroy.au",
            "logo": "https://www.thegilroy.au/images/logo-no-bg.png"
        }
    </script>
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
    <script>
        window.scrollTo({
            top: 0, // change to your target position
            behavior: 'smooth' // still smooth, but customizable if combined with animation
        });
    </script>
    <!-- JS Content -->
    @yield('js')
</body>

</html>
