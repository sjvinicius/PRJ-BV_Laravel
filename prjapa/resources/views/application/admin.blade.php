@extends('system.layout')

<!-- @section('title', 'Products - prjnome') -->

@section('header')
@include ('system.header')
@endsection
@section('style')
@include("system.plugins.css.datatable")
<style>
    .container-table {

        border: 2px solid var(--primary);
        border-radius: 5px;
        width: 80%;
    }
</style>
@endsection
@section('head')
@endSection
@section('content') 
<div class="container">
    <!-- <h1 class="logo">MICHELLE DOCES</h1> -->
    <div class="row my-3 align-items-center justify-content-center flex-column">
        <div class="container-table p-3">
            <table id="teste" class="display table table-hover" style="margin-bottom: 0px;">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Dia</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>80</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex my-3 gap-5 justify-content-center">
            <button class="button-admin">
                <i class="fa-solid fa-pen"></i>
                cadastro produto
            </button>
            <button class="button-admin">
                <i class="fa-solid fa-trash-can"></i>
                pedidos realizados
            </button>
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