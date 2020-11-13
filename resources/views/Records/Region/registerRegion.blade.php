@extends('master')
@section('content')


    <h1 class="titlePage">CADASTRO DE REGIÕES</h1>
    <hr/>
    <form class="formsProject" action="{{route('saveRegions')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-11">
                <label for="text">Nome da Região </label>
                <input type="text" class="form-control" name="nome" required>
            </div>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listRegions')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>

@endsection