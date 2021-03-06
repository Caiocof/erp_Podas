@extends('master')
@section('content')


    <h1 class="titlePage">CADASTRO DE EQUIPES</h1>
    <hr/>

    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach

    <form class="formsProject" action="{{route('saveTeams')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf


        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="text">Responsável </label>
                <input type="text" class="form-control" name="responsavel" value="{{old('responsavel')}}">
            </div>

            <div class="form-group col-md-5">
                <label for="nome">Valor Serviço</label>
                <input type="number" class="form-control" name="valorservico" value="{{old('valorservico')}}">
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