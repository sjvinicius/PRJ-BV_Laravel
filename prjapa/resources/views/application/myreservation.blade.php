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
                            <tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                                <td>@fat</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
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
