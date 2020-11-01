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
                <input type="text" class="form-control" name="nome" required>
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
                <select name="estado">
                    <option selected value="BA">BA</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>

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
            <div class="form-group col-md-3">
                <label for="inputFuncao">Função</label>
                <select id="inputFuncao" class="form-control" name="inputFuncao">
                    <option selected>Escolher...</option>
                    @foreach ($occupations as $occupation)
                        <option value='{{$occupation->TFUNCAO_ID_PK ?? ''}}'>{{$occupation->TFUNCAO_NOME ?? ''}}</option>
                    @endforeach
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
            <div class="form-group col-md-3">
                <label for="inputEquipe">Equipe</label>
                <select id="inputEquipe" class="form-control" name="inputEquipe">
                    <option selected>Escolher...</option>
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
            <a href="{{route('listWorks')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>
    @stack('javascript')

@endsection