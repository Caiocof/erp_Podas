@extends('master')
@section('content')

    <h1 class="titlePage">CADASTRO DE USUÁRIOS</h1>
    <hr/>

    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach

    <form class="formsProject" action="{{route('saveUser')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Login</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group col-md-4">
                <label for="text">Email</label>
                <input type="email" class="form-control" name="email">
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
