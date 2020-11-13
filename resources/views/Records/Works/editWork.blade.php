@extends('master')
@section('content')


    <h1 class="titlePage">EQUITAR FUNCIONÁRIOS</h1>
    <hr/>

    <form class="formsProject" action="{{route('saveEditWorks',['id' => $work->TFUNC_ID])}}" method="POST"
          autocomplete="off"
          enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- NAME -->
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="text">Codigo </label>
                <input type="text" class="form-control" name="cod" value="{{$work->TFUNC_CODIGO ?? ''}}">
            </div>
            <div class="form-group col-md-11">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$work->TFUNC_NOME ?? ''}}" required>
            </div>
        </div>

        <!-- ADDRESS -->
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="text">Cidade </label>
                <input type="codigo" class="form-control" name="cidade" value="{{$work->TFUNC_CIDADE ?? ''}}">
            </div>
            <div class="form-group col-md-1">
                <label for="nome">Estado</label>
                <input type="text" class="form-control" name="estado" value="{{$work->TFUNC_EST ?? ''}}">
            </div>
            <div class="form-group col-md-4">
                <label for="text">Endereço </label>
                <input type="text" class="form-control" name="endereco" value="{{$work->TFUNC_END ?? ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">Bairro</label>
                <input type="text" class="form-control" name="bairro" value="{{$work->TFUNC_BAIRRO ?? ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">CEP</label>
                <input type="text" class="form-control" name="cep" value="{{$work->TFUNC_CEP ?? ''}}">
            </div>
        </div>

        <!-- CONTACT -->
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome">Telefone</label>
                <input type="text" class="form-control" name="tel" value="{{$work->TFUNC_TEL ?? ''}}">
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Celular</label>
                <input type="text" class="form-control" name="cel" value="{{$work->TFUNC_CEL ?? ''}}">
            </div>

            <div class="form-group col-md-2">
                <label for="nome">RG</label>
                <input type="text" class="form-control" name="rg" value="{{$work->TFUNC_RG ?? ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">CPF</label>
                <input type="text" class="form-control" name="cpf" value="{{$work->TFUNC_CPF ?? ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">Salário</label>
                <input type="num" class="form-control" name="salario" value="{{$work->TFUNC_SALARIO ?? ''}}">
            </div>

        </div>

        <!-- CONTRACTING DATA -->
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputFuncao">Função</label>
                <select id="inputFuncao" class="form-control" name="inputFuncao">
                    <option selected value='{{$work->TFUNC_FUNCAO_ID_FK}}'>{{$work->TFUNCAO_NOME}}</option>
                    @foreach($occupations as $occupation)
                        <option value='{{$occupation->TFUNCAO_ID_PK ?? ''}}'>{{$occupation->TFUNCAO_NOME ?? ''}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Data Nascimento</label>
                <input type="date" class="form-control" name="datanasc" value="{{$work->TFUNC_DT_NASC ?? ''}}">
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Data Admissão</label>
                <input type="date" class="form-control" name="dataadmin" value="{{$work->TFUNC_DT_ADMIS ?? ''}}">

            </div>
            <div class="form-group col-md-3">
                <label for="inputEquipe">Equipe</label>
                <select id="inputEquipe" class="form-control" name="inputEquipe">
                    <option selected value="{{$work->TFUNC_EQUIPE_ID_FK}}">{{$work->TEQUIPE_NOME}}</option>
                    @foreach($workTeams as $workTeam)
                        <option value='{{$workTeam->TEQUIPE_ID_PK ?? ''}}'> {{$workTeam->TEQUIPE_NOME ?? ''}} </option>
                    @endforeach
                </select>

            </div>
        </div>

        <!-- DATA BANK -->
        <div class="form-row">
            <div class="card-body text-primary">
                <div class="card-body">
                    <div class="card border-primary mb-10">
                        <div class="card-header">Dados Bancários</div>
                        <div class="card-body text-primary">

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="text">Banco </label>
                                    <input type="text" class="form-control" name="banco"
                                           value="{{$work->TFUNC_BANCO ?? ''}}">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nome">Agência</label>
                                    <input type="text" class="form-control" name="agencia"
                                           value="{{$work->TFUNC_AGENCIA ?? ''}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nome">Conta</label>
                                    <input type="text" class="form-control" name="conta"
                                           placeholder="Conta com o Dígito" value="{{$work->TFUNC_CONTA ?? ''}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nome">Tipo da Conta</label>
                                    <input type="text" class="form-control" name="tipoconta"
                                           placeholder="Corrente ou Poupança" value="{{$work->TFUNC_TIPOCONTA ?? ''}}">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- DATA DEMISSION -->
        <div class="col-sm-12">
            <div class="card-body">
                <div class="card border-danger mb-10">
                    <div class="card-header">Dados para Demissão</div>
                    <div class="card-body text-danger">

                        <div class="form-group col-md-8">
                            <label for="text">Data Demissão </label>
                            <input type="date" class="form-control" name="datademissao"
                                   value="{{$work->TFUNC_DT_DEMIS ?? ''}}">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="text">Motivo Demissão </label>
                            <textarea type="text" class="form-control" name="motivodemissao">
                                {{$work->TFUNC_MOTIVO_DEMIS ?? ''}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottuns">

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('listWorks')}}" class="btn btn-warning">Voltar</a>
            </div>
        </div>
    </form>



@endsection