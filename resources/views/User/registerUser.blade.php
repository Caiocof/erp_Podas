@extends('master')
@section('content')

    <form class="formUser" action="POST" autocomplete="off">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group col-md-4">
                <label for="text">Nome Completo </label>
                <input type="text" class="form-control" id="nomecompleto">
            </div>

            <div class="form-group col-md-2">
                <label for="nome">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>

        </div>
        <div class="bottuns">

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{url('/')}}" class="btn btn-warning">Voltar</a>
        </div>
    </form>

@endsection
