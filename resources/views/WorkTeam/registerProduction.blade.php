@extends('master')
@section('content')


    <h1 class="titlePage">CADASTRO DE EQUIPES</h1>
    <hr/>
    <form class="formsProject" action="{{route('')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf


{{--        <input type="hidden" name="cid" value="<?= feedForm($id, $equipe, 'TEQUIPE_ID_PK') ?>">--}}
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="text">Item</label>
                <input type="text" class="form-control" name="item" required>
            </div>
            <div class="form-group col-md-2">
                <label for="nome">data</label>
                <input type="date" class="form-control" name="dataprod" required>
            </div>


            <div class="form-group col-md-6">
                <label for="inputRegiao">Lt</label>
                <select id="inputRegiao" class="form-control" name="inputRegiao" required>
                    <option selected>Escolher...</option>
<!--                    --><?php
//                    foreach ($ltDAO->read() as $lts) {
//                        echo "<option value='{$lts['TLT_ID_PK']}'> {$lts['TLT_NOME']} -  {$lts['TLT_LOCAL']} - {$lts['TLT_SIGLA']}</option>";
//                    } ?>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="text">Vão </label>
                    <input type="text" class="form-control" name="vao" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="nome">Comprimento</label>
                    <input type="text" class="form-control" name="comp" id="comp" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="nome">Largura</label>
                    <input type="text" class="form-control" name="larg" id="larg" onChange="multiplica()" required>
                </div>

                <div class="form-group col-md-2">
                    <label for="nome">Total M2</label>
                    <input type="text" class="form-control" name="result" id="m2" disabled>
                </div>
                <div class="form-group col-md-5">
                    <label for="text">Justificativa</label>
                    <input type="text" class="form-control" name="justificativa">
                </div>
            </div>


            <div class="form-group col-md-5">
                <label for="nome">Imagem Antes</label>
                <input type="file" class="form-control" name="img_antes" required>
            </div>


            <div class="form-group col-md-5">
                <label for="nome">Imagem Depois</label>
                <input type="file" class="form-control" name="img_depois" required>
            </div>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listTeams')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>

@endsection