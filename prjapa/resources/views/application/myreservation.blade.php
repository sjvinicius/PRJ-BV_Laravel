@extends('system.prelayout')

@section('title', 'Minhas Reservas')

@section('header')
    @include('system.header')
@endsection

@section('style')
    <style>
        .card-title label {
            font-weight: bold;
            margin: 1rem 0;
            padding-left: .5rem;
            font-size: 1.3rem;
            color: var(--primary)
        }

        thead th {
            color: var(--primary) !important;
        }

        .subtitle {

        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="card p-0">
                <div class="card-title" style="border-bottom: solid 1px var(--primary)">
                    <div class="container">
                        <label>Minhas Reservas</label>
                        <label class="subtitle">Últimas 4 semanas</label>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Ações
                                </th>
                                <th scope="col">
                                    #
                                </th>
                                <th scope="col">
                                    Produto
                                </th>
                                <th scope="col">
                                    Criação da Reserva
                                </th>
                                <th scope="col">
                                    Data da Reserva
                                </th>
                                <th scope="col">
                                    Quantidade
                                </th>
                                <th scope="col">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            </tr>
                            @php
                            $pedidos = [];

                            for ($i = 0; $i < 7; $i++) {
                                $pedidos[] = [
                                    'id' => strval($i + 1),
                                    'nome' => 'nome' . ($i + 1),
                                    'data-ini' => '',
                                    'data-fim' => '',
                                    'quantidade' => '',
                                    'total' => $i + 1
                                ];
                            }

                            $id = 4;
                            @endphp
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <th scope="row">
                                        <a href="{{route('myreservation.destroy', ['id' => $id])}}" title="Excluir">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </a></th>
                                    <td>{{$pedido['id']}}</td>
                                    <td>{{$pedido['nome']}}</td>
                                    <td>{{$pedido['data-ini']}}</td>
                                    <td>{{$pedido['data-fim']}}</td>
                                    <td>{{$pedido['quantidade']}}</td>
                                    <td>{{$pedido['total']}}</td>
                                </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endSection

@section('footer')
    @include('system.footer')
@endsection
