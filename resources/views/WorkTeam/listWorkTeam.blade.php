@extends('master')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Código</th>
            <th>Nome da Equipe</th>
            <th>Responsável</th>
            <th>Valor Serviço</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
<!--        --><?php
//        foreach ($equipeDAO->read() as $equipe) {
//            //  var_dump($equipe);
//            echo "
//                    <tr>
//                    <th scope='row'>{$equipe['TEQUIPE_ID_PK']}</th>
//                    <td>{$equipe['TEQUIPE_NOME']}</td>
//                    <td>{$equipe['TEQUIPE_RESP']}</td>
//                    <td>{$equipe['TEQUIPE_VLR_SERV']}</td>
//                    <td>
//                    <a class='btn btn-primary btn-sm' role='button' href='editaRequipes.php?id={$equipe['TEQUIPE_ID_PK']}' >Editar</a>
//                    <a class='btn btn-danger btn-sm' role='button' href='../recurso/delet/delEquipe.php?id={$equipe['TEQUIPE_ID_PK']}' data-confirm=''>Apagar</a>
//                    <a class='btn btn-info btn-sm' role='button' href='cadastroProducao.php?id={$equipe['TEQUIPE_ID_PK']}' >Lançar Produção</a>
//                    </td>
//                    </tr>
//                    ";
//        }
//        ?>

        </tbody>
        <tfoot>

        </tfoot>
    </table>

@endsection
