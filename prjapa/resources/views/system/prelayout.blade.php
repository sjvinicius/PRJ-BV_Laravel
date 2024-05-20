<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> -->

<<<<<<< HEAD
    <style>
        :root {
            --primary: #4F1271;
            --secondary: #BFACC8;
            --tertiary: #FF9B42;
            --bs-primary: var(--primary);
        }

        .text-primary {
            /* Corrigido */
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .text-secondary {
            /* Corrigido */
            font-family: "Lancelot", serif;
            font-weight: 400;
            font-style: normal;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: none;
        }

        body {
            min-width: 100vw;
            min-height: 100vh;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        label,
        button {
            margin-bottom: .3rem;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .header p,
        .header h1,
        .header h2,
        .header h3,
        .header h4,
        .header h5,
        .header label,
        .header button {
            color: #FFF;
            font-size: .8rem;
            padding: 0 !important;
            margin: 0 !important;
        }

        .active {
            color: var(--tertiary) !important
        }

        .header {
            height: 2rem
        }

        a {
            text-decoration: none !important;
            font-size: .8rem;
            color: #FFF !important;
        }

        a:not(.disabled):hover {
            color: var(--secondary) !important;
        }

        i {
            color: #FFF;
            cursor: pointer;
        }

        i:not(.disabled):hover {
            color: var(--secondary);
            cursor: pointer;
        }

        .fa-power-off {
            color: #F00 !important;
        }

        input {
            border-radius: 3px;
            padding: .2rem .7rem;
            font-size: 1rem;
        }

        button {
            padding: .2rem 1rem;
            background-color: var(--tertiary);
            color: #FFF;
            border-radius: 3px !important;
        }

        .card {
            border: 1px var(--primary) solid;
        }
    </style>
=======
    <link rel="stylesheet" href="{{asset("/css/system/global.css")}}">
    <link rel="stylesheet" href="{{asset("/css/system/input.css")}}">
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
    @yield('style')
</head>

<body class="d-flex flex-column justify-content-between">
    @yield('header')
    <div id="background" class="flex-grow-1 justify-content-start">
        @yield('content')
    </div>
    @yield('footer')
    <script src="https://kit.fontawesome.com/e29123cf07.js" crossorigin="anonymous"></script>
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
=======
    <!-- <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script> -->
    @yield("script")
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
</body>

</html>