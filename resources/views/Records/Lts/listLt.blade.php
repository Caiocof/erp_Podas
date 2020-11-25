@extends('master')
@section('content')

    <h1 class="titlePage">LISTA DE LT's</h1>
    <hr/>
    <div class="subMenu">
        <a class="btn btn-danger" href="{{route('dashboard')}}" role="button">Voltar</a>
        <a class="btn btn-success" href="{{route('registerLts')}}" role="button">Cadastrar Novo</a>

    </div>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>LT Código</th>
            <th>LT Nome</th>
            <th>LT local</th>
            <th>Sigla</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($lts as $lt)
            <tr>
                <th scope='row'>{{$lt->TLT_ID_PK}}</th>
                <td>{{$lt->TLT_NOME}}</td>
                <td>{{$lt->TLT_LOCAL}}</td>
                <td>{{$lt->TLT_SIGLA}}</td>
                <td>
                    <div class="btn-toolbar" role="toolbar">
                        <div div class="btn-group mr-2" role="group">
                            <a class='btn btn-primary btn-sm' role='button'
                               href='{{route('editLts',['id' => $lt->TLT_ID_PK])}}'>Editar</a>
                        </div>
                        <div div class="btn-group mr-2" role="group">
                            <form action="{{route('deleteLts',['id' => $lt->TLT_ID_PK])}}" method="post">
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
        <tfoot>

        </tfoot>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{$lts->links()}}
        </ul>
    </nav>

@endsection
