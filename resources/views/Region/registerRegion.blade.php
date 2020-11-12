@extends('master')
@section('content')


    <h1 class="titlePage">CADASTRO DE LT's</h1>
    <hr/>
    <form class="formsProject" action="{{route('saveLts')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="text">Nome da LT </label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Local</label>
                <input type="text" class="form-control" name="local" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nome">Sigla</label>
                <input type="text" class="form-control" name="sigla" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputRegiao">Região</label>
                <select id="inputRegiao" class="form-control" name="inputRegiao" required>
                    <option selected>Escolher...</option>
                    @foreach ($regions as $region)
                        <option value='{{$region->TREGIAO_ID_PK}}'> {{$region->TREGIAO_NOME}} </option>
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