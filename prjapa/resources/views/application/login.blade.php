@extends('system.prelayout')

@section('title', 'Login - Michele Doces')

@section('header')
@endsection
@section('style')
    <style>
        body {
            min-width: 100vw;
            min-height: 100vh;
        }

        label p {
            color: #FFF;
        }

        #background {
            background: linear-gradient(-45deg, var(--primary), var(--secondary));
            min-width: 100vw;
            min-height: 100vh;
            -webkit-animation: Animation 10s ease infinite;
            -moz-animation: Animation 10s ease infinite;
            animation: Animation 10s ease infinite;
            background-size: 300% 700%;
        }

        @-webkit-keyframes Animation {
            0% {
                background-position: 10% 0%
            }

            50% {
                background-position: 91% 100%
            }

            100% {
                background-position: 0% 50%
            }
        }

        @-moz-keyframes Animation {
            0% {
                background-position: 10% 0%
            }

            50% {
                background-position: 50% 100%
            }

            100% {
                background-position: 10% 0%
            }
        }

        @keyframes Animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }

        }
    </style>
@endsection
@section('head')
@endSection
@section('content') <div class="container">
        <div style="height: 100vh !important" class="row d-flex gap-5 flex-column align-items-center justify-content-around">
<<<<<<< HEAD
            <img src="../../public/img/Logo.png" alt="Logo Michele Doces">
=======
            <img class="w-50" src="{{asset("/img/Logo.png")}}" alt="Logo Michele Doces">
>>>>>>> 461ffe23e3d3b2cf6b84dbbc6a55a40e9bb3da1a
            <div class="d-flex flex-column col-4 gap-3">
                <div class="d-flex flex-column">
                    <label for="email">
                        <p>E-mail</p>
                    </label>
                    <input id="email" type="text">
                </div>
                <div class="d-flex flex-column">
                    <label for="password">
                        <p>Senha</p>
                    </label>
                    <input id="password" type="password">
                </div>
            </div>
            <div class="col-4 d-flex align-items-center flex-column">
                <button class="w-50" onclick="window.location='{{ url('/products') }}'">Login</button>
            </div>
        </div>
    </div>
@endSection
@section('footer')
    {{-- @include('system.footer') --}}
@endsection
