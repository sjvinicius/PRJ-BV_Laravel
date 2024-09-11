@extends('system.prelayout')
@section('title')
    Produtos
@endSection

@section('header')
    @include('system.header')
@endSection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/application/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/system/input.css') }}">
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
                $diasSemana = [
                    'Segunda-feira',
                    'Terça-feira',
                    'Quarta-feira',
                    'Quinta-feira',
                    'Sexta-feira',
                    'Sábado',
                    'Domingo',
                ];

                $produtos = [
                    ['nome' => 'Produto 1', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 2', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 3', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 4', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 5', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 6', 'imagem' => 'doce1.jpg'],
                    ['nome' => 'Produto 7', 'imagem' => 'doce1.jpg'],
                ];

            @endphp
            @foreach ($diasSemana as $index => $dia)
                <div class='col-3 py-2'>
                    <div class='card d-flex align-items-center flex-column'>
                        <div class='col-12 text-center title-product'>
                            {{ $dia }}
                        </div>
                        <div style='min-height: 8rem;'>
                            @php
                                $produto = $produtos[$index];
                            @endphp
                            <img class="w-100" src="{{ asset('img/' . $produto['imagem']) }}" alt="{{ $produto['nome'] }}">
                        </div>
                        <button class='col-12' data-bs-target='#mymodal' data-bs-toggle='modal'>Quero esse !</button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="modal fade" id="mymodal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header d-flex justify-content-between">
                    <div class="modal-title">Produto Nome</div>
                    <button type="button" class="close fs-5" data-bs-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div> --}}
                <div class="modal-body">
                    <div class="container my-3">
                        <div class="d-flex justify-content-between">
                            <div>

                                <h3>Brigadeiro Salgado</h3>
                                <h4>Salgados/Diversos</h4>
                            </div>
                            <div>
                                <i class="fa-regular fa-circle-xmark bg-primary p-2 rounded-1" data-bs-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-6 gap-3 d-flex flex-column justify-content-between flex-grow-1">
                                <div class="col-12 img flex-grow-1">
                                    img
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="col img">
                                        img
                                    </div>
                                    <div class="col img">
                                        img
                                    </div>
                                    <div class="col img">
                                        img
                                    </div>
                                    <div class="col img">
                                        img
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 gap-3 d-flex flex-column justify-content-between flex-grow-1">
                                <div>
                                    <h5>Descrição</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates natus nobis
                                        aspernatur ducimus delectus. Similique officia </p>
                                </div>
                                <div>
                                    <h5>Tamanho</h5>
                                    <p>16 Kg</p>
                                </div>
                                <div>
                                    <h5>Disponíveis</h5>
                                    <p>32 Unidades</p>
                                </div>
                                <div class="d-flex gap-3" style="height: 2rem">
                                    <div class="inputnumber">
                                        <button class="lessbutton" onclick="numberInput.stepDown()"
                                            title="Diminuir quantidade" aria-label="Diminuir quantidade">-</button>

                                        <input type="number" disabled value="1" min="1" name="numberInput"
                                            id="numberInput">

                                        <button class="plusbutton" onclick="numberInput.stepUp()"
                                            title="Aumentar Quantidade" aria-label="Aumentar Quantidade">+</button>
                                    </div>
                                    <button class="btn btn-secondary d-flex align-items-center m-0 gap-2">Adicionar<i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    <button class="btn btn-primary d-flex align-items-center m-0 gap-2">Comprar<i
                                            class="fa-solid fa-dollar-sign"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('footer')
    @include('system.footer')
@endSection

@section('script')
@endSection
