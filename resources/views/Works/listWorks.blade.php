@extends('master')
@section('content')

    <h1 class="titlePage">LISTA DE FUNCIONARIOS</h1>
    <hr/>
    <div class="subMenu">
        <a class="btn btn-danger" href="{{url('/')}}" role="button">Voltar</a>
        <a class="btn btn-success" href="{{route('registerWorks')}}" role="button">Cadastrar Novo</a>

    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Código</th>
            <th>Nome Funcionário</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($works)){
        foreach ($works as $work) {
        ?>
        <tr>
            <th scope='row'>{{$work->TFUNC_ID}}</th>
            <td>{{$work->TFUNC_NOME}}</td>
            <td>{{$work->TFUNC_CPF}}</td>
            <td>{{$work->TFUNC_CEL}}</td>
            <td>
                <a class='btn btn-primary' role='button'
                   href='{{route('editWorks', ['id' => $work->TFUNC_ID])}}'>Editar</a>
                <a class='btn btn-danger' role='button'
                   href=''
                   data-confirm=''>Apagar</a>
            </td>
        </tr>

        <?php
        }
        }
        ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
@endsection
