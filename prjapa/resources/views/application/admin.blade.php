@extends('system.layout')

<!-- @section('title', 'Products - prjnome') -->

@section('header')
@include ('system.header')
@endsection
@section('style')
@include("system.plugins.css.datatable")
<style>
th, td {
            display: block; 
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
 }
.product-data {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column; 
}

.image-upload {
    height: 100%; width:100%;
    border:3px dashed #4F1271;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

</style>
@endsection
@section('head')
@endSection
@section('content') 
<div id="product-admin-page">
  <h1 class="title" style="color:4F1271; display: flex; padding-left: 120px;">Cadastro de Produtos</h1>
  <div class="product-registration" style="display: flex; justify-content: center; padding-right: 120px;
    padding-left: 120px;">
    <div class="product-data">
      <form id="product-form" action="/cadastrar-produto" method="post" style="display: flex; flex-direction: column; height: 100%">
        <label for="product-name">Nome do Produto:</label>
        <input type="text" id="product-name" name="product-name" required />
        <br />
        <label for="product-price">Preço:</label>
        <input
          type="number"
          id="product-price"
          name="product-price"
          step="0.01"
          required
        />
        <br />
        <label for="product-description">Descrição:</label>
        <textarea
          id="product-description"
          name="product-description"
          rows="4"
          required
        ></textarea>
        <br />
      </form>
    </div>
    <div class="product-data">
      <h3 style="color:4F1271;">Envie uma imagem do produto</h3>
      <div class="image-upload"></div>
    </div>
  </div>
  <div class="button" style="padding:20px; margin: 0 auto; text-align: center; padding">
           <button class="button-register" style="background-color:FF9B42; width: 250px; height:50px; color:#FFF;  border-radius: 5px; border: none;">Cadastrar Produto</button>
  </div>
  <div class="my-products" style="background-color: BFACC8; margin-left:120px; margin-right:120px; border;  border-radius: 8px; border: 1px solid #4F1271;">
    <h2 style="color:4F1271;     padding-left: 15px;">Meus Produtos</h2>
    <div class="table-container">
      <table style="width: 100%; border-collapse: collapse; border: 1px solid #4F1271; background-color:#FFF;">
        <thead style="display:contents;">
          <tr style="display:flex; color: 4F1271">
            <th>Status</th>
            <th>Editar</th>
            <th>Id</th>
            <th>Produto</th>
            <th>Data de Criação</th>
            <th>Data da Reserva</th>
            <th>Quantidade</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody style="display:contents;">
          <tr style="display: grid; grid-template-columns: repeat(8, 1fr);">
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
          <tr style="display: grid; grid-template-columns: repeat(8, 1fr);">
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
@include("system.plugins.js.datatable")
<script>
    function Employee(name, position, salary, office) {
        this.name = name;
        this.position = position;
        this.salary = salary;
        this._office = office;

        this.office = function () {
            return this._office;
        }
    };

    $('#teste').DataTable({
        data: [
            new Employee("Tiger Nixon", "System Architect", "$3,120", "Edinburgh"),
            new Employee("Garrett Winters", "Director", "$5,300", "Edinburgh")
        ],
        columns: [
            { data: 'name' },
            { data: 'salary' },
            { data: 'office' },
            { data: 'position' }
        ]
    });
</script>
@include ('system.footer')

@endsection