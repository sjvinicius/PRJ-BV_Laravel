@extends('system.layout')

@section('title')
    Cadastro de Produtos
@endSection

@section('header')
@include ('system.header')
@endsection

@section('style')
<style>
.status-indicator {conferir e mexer
    width: 20px; /* Tamanho do círculo */
    height: 20px; /* Tamanho do círculo */
    border-radius: 50%; /* Tornar o elemento redondo */
    display: inline-block;
    border: 2px solid #ccc; /* Borda do círculo */
}

.status-indicator.active {
    background-color: green; /* Cor de fundo para status ativo */
}

.status-indicator.inactive {
    background-color: red; /* Cor de fundo para status inativo */
}

/* Ajustar o ícone de lápis */
.edit-product {
    color: #007bff; /* Cor do link */
    text-decoration: none; /* Remover sublinhado padrão */
}

.edit-product:hover {
    text-decoration: underline; /* Sublinhar ao passar o mouse */
}
</style>
@endSection

@section('content')
    <div id="product-admin-page">
        <div class="product-registration">
            <h1 class="title">Cadastro de Produtos</h1>
            <div class="product-data">
                <form id="product-form" action="/cadastrar-produto" method="post">
                    <label for="product-name">Nome do Produto:</label>
                    <input type="text" id="product-name" name="product-name" required>
                    <br>
                    <label for="product-price">Preço:</label>
                    <input type="number" id="product-price" name="product-price" step="0.01" required>
                    <br>
                    <label for="product-description">Descrição:</label>
                    <textarea id="product-description" name="product-description" rows="4" required></textarea>
                    <br>
                </form>
            </div>
            <div class="image-upload">

            </div>
            <button class="button-register">Cadastrar Produto</button>
        </div>
        <div class="my-products">
            <h2>Meus Produtos</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Id</th>
                            <th>Produto</th>
                            <th>Data de Criação</th>
                            <th>Data da Reserva</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="status">
                                <div class="status-indicator active"></div>
                            </td>
                            <td>    
                                <a href="#" class="edit-product">
                                    <i class="fas fa-pencil-alt"></i> Editar
                                </a>
                            </td>
                            <td>1</td>
                            <td>Produto A</td>
                            <td>2023-01-01</td>
                            <td>2023-01-05</td>
                            <td>3</td>
                            <td>R$ 300,00</td>
                        </tr>
                        <tr>
                            <td class="status">
                                <div class="status-indicator active"></div>
                            </td>
                            <td>    
                                <a href="#" class="edit-product">
                                    <i class="fas fa-pencil-alt"></i> Editar
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
    </div>
@endSection

@section('footer')
    @include('system.footer')
@endSection