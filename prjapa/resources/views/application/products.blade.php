@extends('system.prelayout')
@section('title')
    Produtos
@endSection

@section('header')
    @include('system.header')
@endSection

@section('style')
    <style>
        h3 {
            color: var(--primary);
            font-weight: 500 !important;
        }

        .card {
            border: solid .5px var(--primary)
        }

        .card>button {
            margin: 0 !important;
            background-color: var(--primary);
            border-radius: 0 !important;
        }

        .card div p {
            background-color: var(--secondary);
            border-radius: 5px 5px 0 0 !important;
            color: var(--primary);
            border-bottom: solid .5px var(--primary);
        }
    </style>
@endSection

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <h3>Maio / 2024</h3>
            </div>
            <div class="d-flex col-12 mt-3">
                <div class="d-flex col-6">
                    <div class="col-4">
                        <button>Semana 1</button>
                    </div>
                    <div class="col-4">
                        <button>Semana 2</button>
                    </div>
                    <div class="col-4">
                        <button>Semana 3</button>
                    </div>
                    <div class="col-4">
                        <button>Semana 4</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
            @php
                $str = '';
                for ($i = 0; $i < 7; $i++) {
                    $str .= "<div class='col-3 mt-3'>
                        <div class='card d-flex align-items-center flex-column'>
                            <div class='col-12 text-center'><p>Segunda-Feira</p></div>
                            <div style='min-height: 8rem;'>img</div>
                            <button class='col-12'>Quero Esse !</button>
                        </div>
                    </div>";
                }
                echo $str;
            @endphp
        </div>

    </div>
@endSection

@section('footer')
    @include('system.footer')
    <script>
        // Seleciona todos os elementos com a classe 'btn'
        const buttons = document.querySelectorAll('.card > button');

        // Itera sobre os botões selecionados e adiciona o evento de clique a cada um
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('Botão clicado:');
            });
        });
    </script>
@endSection
