@extends('master')
@section('content')
    <h1 class="titlePage">EDITAR LT's</h1>
    <hr/>

    <form class="formsProject" action="{{route('saveEditLts',['id' => $lt->TLT_ID_PK])}}" method="POST"
          autocomplete="off"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$lt->TLT_NOME ?? ''}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="text">Local </label>
                <input type="text" class="form-control" name="local" value="{{$lt->TLT_LOCAL ?? ''}}">
            </div>

            <div class="form-group col-md-3">
                <label for="nome">Sigla</label>
                <input type="text" class="form-control" name="sigla" value="{{$lt->TLT_SIGLA ?? ''}}">
            </div>

            <div class="form-group col-md-4">
                <label for="inputRegiao">Região</label>
                <select id="inputRegiao" class="form-control" name="inputRegiao">
                    <option value="{{$lt->TLT_REGIAO_FK}}" selected>{{$lt->TREGIAO_NOME ?? ''}}</option>
                    @foreach($regions as $region)
                        <option value='{{$region->TREGIAO_ID_PK}}'> {{$region->TREGIAO_NOME ?? ''}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listLts')}}" class="btn btn-warning">Voltar</a>
        </div>
    </form>




@endsection