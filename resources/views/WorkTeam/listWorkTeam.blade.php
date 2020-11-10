@extends('master')
@section('content')

    <h1 class="titlePage">LISTA DE EQUIPES</h1>
    <hr/>
    <div class="subMenu">
        <a class="btn btn-danger" href="{{url('/')}}" role="button">Voltar</a>
        <a class="btn btn-success" href="{{route('registerTeams')}}" role="button">Cadastrar Nova</a>

    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Código</th>
            <th>Nome da Equipe</th>
            <th>Responsável</th>
            <th>Valor Serviço</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teams as $team)
            @if($team->TEQUIPE_NOME != 'NAO DEFINIDO')
                <tr>
                    <th scope='row'>{{$team->TEQUIPE_ID_PK}}</th>
                    <td>{{$team->TEQUIPE_NOME}}</td>
                    <td>{{$team->TEQUIPE_RESP}}</td>
                    <td>{{$team->TEQUIPE_VLR_SERV}}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar">
                            <div div class="btn-group mr-2" role="group">
                                <a class='btn btn-primary btn-sm' role='button'
                                   href='{{route('editTeams',['id' =>$team->TEQUIPE_ID_PK])}}'>Editar</a>
                            </div>
                            <div div class="btn-group mr-2" role="group">
                                <form action="{{route('deleteTeams',['id' => $team->TEQUIPE_ID_PK])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-danger' role='button' data-confirm=''>
                                        Apagar
                                    </button>
                                </form>
                            </div>
                            <a class='btn btn-info btn-sm' role='button'
                               href='{{route('lauchesProdution', ['id' => $team->TEQUIPE_ID_PK])}}'>
                                Lançar Produção</a>
                        </div>
                    </td>
                </tr>
            @endif
        @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>

@endsection
