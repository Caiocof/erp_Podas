@extends('master')
@section('content')


    <h1 class="titlePage">CADASTRO DE EQUIPES</h1>
    <hr/>
    <form class="formsProject" action="{{route('saveTeams')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf


        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="text">Responsável </label>
                <input type="text" class="form-control" name="responsavel" required>
            </div>

            <div class="form-group col-md-5">
                <label for="nome">Valor Serviço</label>
                <input type="number" class="form-control" name="valorservico" required>
            </div>
        </div>

        <div class="form-group col-md-13">
            <label for="nome">Observação</label>
            <textarea class="form-control" name="observacao" cols="30" rows="5"></textarea>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listTeams')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>

@endsection