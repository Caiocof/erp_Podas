@extends('master')
@section('content')

    <h1 class="titlePage">CADASTRO DE FUNCIONÁRIOS</h1>
    <hr/>
    <form class="formsProject" action="{{route('saveWorks')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
    @csrf

    <!-- NAME -->
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="text">Codigo </label>
                <input type="text" class="form-control" name="cod">
            </div>
            <div class="form-group col-md-11">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>

        <!-- ADDRESS -->
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="text">Cidade </label>
                <input type="codigo" class="form-control" name="cidade">
            </div>
            <div class="form-group col-md-1">
                <label for="nome">Estado</label>
                <input type="text" class="form-control" name="estado">
            </div>
            <div class="form-group col-md-4">
                <label for="text">Endereço </label>
                <input type="text" class="form-control" name="endereco">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">Bairro</label>
                <input type="text" class="form-control" name="bairro">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">CEP</label>
                <input type="text" class="form-control" name="cep">
            </div>
        </div>

        <!-- CONTACT -->
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome">Telefone</label>
                <input type="text" class="form-control" name="tel">
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Celular</label>
                <input type="text" class="form-control" name="cel">
            </div>

            <div class="form-group col-md-2">
                <label for="nome">RG</label>
                <input type="text" class="form-control" name="rg">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">CPF</label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">Salário</label>
                <input type="num" class="form-control" name="salario">
            </div>

        </div>

        <!-- CONTRACTING DATA -->
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputFuncao">Função</label>
                <select id="inputFuncao" class="form-control" name="inputFuncao">
                    <option selected>Escolher...</option>
                    <!--                    --><?php
                    //                    foreach ($funcaoDAO->read() as $funcoes) {
                    //                        echo "<option value='{$funcoes['TFUNCAO_ID_PK']}'> {$funcoes['TFUNCAO_NOME']} </option>";
                    //                    } ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Data Nascimento</label>
                <input type="date" class="form-control" name="datanasc">
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Data Admissão</label>
                <input type="date" class="form-control" name="dataadmin">

            </div>
            <div class="form-group col-md-4">
                <label for="inputEquipe">Equipe</label>
                <select id="inputEquipe" class="form-control" name="inputEquipe">
                    <option selected>Escolher...</option>
                    <!--                    --><?php
                    //                    foreach ($equipeDAO->read() as $equipe) {
                    //                        echo "<option value='{$equipe['TEQUIPE_ID_PK']}'> {$equipe['TEQUIPE_NOME']} </option>";
                    //                    } ?>
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
                                    <input type="text" class="form-control" name="banco">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="nome">Agência</label>
                                    <input type="text" class="form-control" name="agencia">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nome">Conta</label>
                                    <input type="text" class="form-control" name="conta"
                                           placeholder="Conta com o Dígito">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nome">Tipo da Conta</label>
                                    <input type="text" class="form-control" name="tipoconta"
                                           placeholder="Corrente ou Poupança">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bottuns">

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{url('/')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>

@endsection