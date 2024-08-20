@extends('system.prelayout')

@section('title', 'Minhas Reservas')

@section('header')
    @include('system.header')
@endsection

@section('style')
    <style>
td {
    padding:15px!important;
    display: flex;
    justify-content: center;
}
th, td { 
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}
    </style>
@endsection

@section('content')
<body class="content" style="display: flex; justify-content: center; align-items: center;">  
    <div class="my-products" style="background-color: BFACC8; margin-left:120px; margin-right:120px; border;  border-radius: 8px; border: 1px solid #4F1271;">
        <h2 style="color:4F1271; padding-left: 15px; font-family: Arial, sans-serif; font-weight: 400;">Meus Pedidos</h2>
        <div class="table-container">
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #4F1271; background-color:#FFF;">
                <thead style="display:contents;">
                    <tr style="display:grid; color: 4F1271; grid-template-columns: repeat(7, 1fr);">
                        <th>Cancelar</th>
                        <th>Id</th>
                        <th>Produto</th>
                        <th>Data de Criação</th>
                        <th>Data da Reserva</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody style="display:contents;">
                    <tr style="display: grid; grid-template-columns: repeat(7, 1fr);">
                        <td>
                            <a href="#" class="cancel-product">
                                <i class="bi bi-trash"></i>Cancelar
                            </a>
                        </td>
                        <td>1</td>
                        <td>Produto A</td>
                        <td>2023-01-01</td>
                        <td>2023-01-05</td>
                        <td>3</td>
                        <td>R$ 300,00</td>
                    </tr>
                    <tr style="display: grid; grid-template-columns: repeat(7, 1fr);">
                        <td>
                            <a href="#" class="cancel-product">
                                <i class="bi bi-trash"></i>Cancelar
                            </a>
                        </td>
                        <td>2</td>
                        <td>Produto B</td>
                        <td>2023-01-02</td>
                        <td>2023-01-06</td>
                        <td>5</td>
                        <td>R$ 500,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
@endSection

@section('footer')
    @include('system.footer')
@endsection
