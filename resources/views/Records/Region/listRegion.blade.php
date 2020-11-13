@extends('master')
@section('content')

    <h1 class="titlePage">LISTA DE REGIÕES</h1>
    <hr/>
    <div class="subMenu">
        <a class="btn btn-danger" href="{{route('dashboard')}}" role="button">Voltar</a>
        <a class="btn btn-success" href="{{route('registerRegions')}}" role="button">Cadastrar Novo</a>

    </div>

    <table class="table table-striped">
        <thead class="table-region">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody class="table-region">
        @foreach ($regions as $region)
            <tr>
                <th scope='row'>{{$region->TREGIAO_ID_PK}}</th>
                <td>{{$region->TREGIAO_NOME}}</td>
                <td>
                    <div class="btn-toolbar btn-region" role="toolbar">
                        <div div class="btn-group mr-2" role="group">
                            <a class='btn btn-primary btn-sm' role='button'
                               href='{{route('editRegions',['id' => $region->TREGIAO_ID_PK])}}'>Editar</a>
                        </div>
                        <div div class="btn-group mr-2" role="group">
                            <form action="{{route('deleteRegions',['id' => $region->TREGIAO_ID_PK])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class='btn btn-danger' role='button' data-confirm=''>
                                    Apagar
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>


@endsection
