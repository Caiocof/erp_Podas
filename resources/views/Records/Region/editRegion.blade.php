@extends('master')
@section('content')
    <h1 class="titlePage">EDITAR LT's</h1>
    <hr/>

    <form class="formsProject" action="{{route('saveEditRegions',['id' => $region->TREGIAO_ID_PK])}}" method="POST"
          autocomplete="off"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$region->TREGIAO_NOME ?? ''}}">
            </div>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listRegions')}}" class="btn btn-warning">Voltar</a>
        </div>
    </form>




@endsection