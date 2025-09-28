<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with 3 Icons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/private_events.css') }}">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="custom-dark-bg">
        <a href="https://www.nowbookit.com/" class="custom-gold-text">
            <i class="far fa-calendar-plus"></i>
        </a>

        <a class="custom-gold-text custom-logo-script" href="/">G</a>

<a href="{{ route('private-events') }}" class="custom-gold-text">
    <i class="fas fa-bars"></i>
</a>
    </nav>

</body>

</html>
