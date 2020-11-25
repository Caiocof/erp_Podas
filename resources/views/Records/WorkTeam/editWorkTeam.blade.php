@extends('master')
@section('content')


    <h1 class="titlePage">EDITAR EQUIPE</h1>
    <hr/>

    <form class="formsProject" action="{{route('saveEditTeams',['id' => $workTeam->TEQUIPE_ID_PK])}}"
          method="POST"
          autocomplete="off"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$workTeam->TEQUIPE_NOME ?? ''}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="text">Responsável </label>
                <input type="text" class="form-control" name="responsavel" value="{{$workTeam->TEQUIPE_RESP ?? ''}}">
            </div>

            <div class="form-group col-md-5">
                <label for="nome">Valor Serviço</label>
                <input type="number" class="form-control" name="valorservico"
                       value="{{$workTeam->TEQUIPE_VLR_SERV ?? ''}}">
            </div>
        </div>

        <div class="form-group col-md-13">
            <label for="nome">Observação</label>
            <textarea class="form-control" name="observacao" cols="30"
                      rows="5">{{$workTeam->TEQUIPE_OBS ?? ''}}</textarea>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listTeams')}}" class="btn btn-warning">Voltar</a>
        </div>
    </form>

@endsection