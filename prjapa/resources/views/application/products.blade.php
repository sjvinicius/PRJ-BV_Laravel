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

        h4 {
            color: var(--primary);
            font-weight: 500 !important;
            font-size: 1rem;
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

        .modal-header button {
            background-color: var(--primary);
        }

        .img {
            background-color: lightgray;
            border: 1px solid var(--primary);
            border-radius: 5px;
            box-shadow: 7px 10px 10px #00000077
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
                            <button class='col-12' data-bs-target='#mymmodal' data-bs-toggle='modal'>Quero Esse !</button>
                        </div>
                    </div>";
                }
                echo $str;
            @endphp
        </div>

    </div>
    <div class="modal fade" id="mymmodal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header d-flex justify-content-between">
                    <div class="modal-title">Produto Nome</div>
                    <button type="button" class="close fs-5" data-bs-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}
                <div class="modal-body">
                    <div class="">
                        <h3>Brigadeiro Salgado</h3>
                        <h4>Salgados/Diversos</h4>
                    </div>
                    <div class="row">
                        <div class=" col-6">
                            <div class="d-flex flex-column gap-3">
                                <div class="col-12 img">
                                    img
                                </div>
                                <div class="">

                                    <div class="d-flex gap-2">
                                        <div class="col-3 img">
                                            img
                                        </div>
                                        <div class="col-3 img">
                                            img
                                        </div>
                                        <div class="col-3 img">
                                            img
                                        </div>
                                        <div class="col-3 img">
                                            img
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary waves">+ Carrinho</button>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('footer')
    @include('system.footer')
@endSection
