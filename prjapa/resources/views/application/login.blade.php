@extends('system.layout')

<!-- @section('title', 'Products - prjnome') -->

@section('header')
    <div class='d-none'></div>
@endsection
@section('head')
    <style>
        :root {
            --primary: #4F1271;
            --secondary: #BFACC8;
            --tertiary: #FF9B42;
        }

        .text-primary: {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .text-secondary: {
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

        #background {
            background: linear-gradient(#4F1271, #9622D7);
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
            color: #FFF !important;
            margin-bottom: .3rem;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        input {
            border-radius: 3px;
            padding: .2rem .7rem;
            font-size: 1rem;
        }

        button {
            padding: .2rem .3rem;
            background-color: var(--tertiary);
            color: #FFF;
            border-radius: 3px !important;
        }
    </style>
    <link rel="stylesheet" href="{{ dirname(__DIR__, 3) }}\resources\css\app.css">
@endSection
@section('content')
    <div class="container">
        <div style="height: 100vh !important" class="row d-flex gap-5 flex-column align-items-center justify-content-around">
            <img src="../   ../public/imgs/Logo.png" alt="Logo Michele Doces">
            <div class="d-flex flex-column col-4 gap-3">
                <div class="d-flex flex-column">
                    <label for="email">E-mail</label>
                    <input id="email" type="text">
                </div>
                <div class="d-flex flex-column">
                    <label for="password">Senha</label>
                    <input id="password" type="text">
                </div>
            </div>
            <div class="col-4 d-flex align-items-center flex-column">
                <button class="w-50" onclick="window.location='{{ url('/products') }}'">Login</button>
            </div>
        </div>
    </div>
@endSection
@section('footer')

@endsection
