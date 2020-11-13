@extends('master')
@section('content')

    <h1 class="titlePage">CADASTRO DE USUÁRIOS</h1>
    <hr/>
    <form class="formsProject" action="{{route('saveUser')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Login</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group col-md-4">
                <label for="text">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group col-md-2">
                <label for="nome">Senha</label>
                <input type="password" class="form-control" name="senha" required>
            </div>

        </div>
        <div class="bottuns">

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{url('/')}}" class="btn btn-warning">Voltar</a>
        </div>
    </form>

@endsection
