<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel')</title>

    {{-- Bootstrap --}}
    <link loading=“lazy” href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lancelot&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" loading=“lazy”>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" loading=“lazy” />
    <link rel="stylesheet" loading=“lazy” href="{{ asset('/css/system/global.css') }}">
    <link rel="stylesheet" loading=“lazy” href="{{ asset('/css/system/input.css') }}">
    @yield('style')
</head>

<body class="d-flex flex-column justify-content-between">
    @yield('header')
    @yield('cart')
    <div id="background" class="flex-grow-1 justify-content-start">
        @yield('content')
    </div>
    @yield('footer')
    <script src="https://kit.fontawesome.com/e29123cf07.js" loading=“lazy” crossorigin="anonymous"></script>
    <!-- <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script> -->
    @yield('script')
</body>

</html>
