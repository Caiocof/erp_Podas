@extends('master')
@section('content')

    <!-- script calcula total m2-->
    <script type="text/javascript">
        function multiplica() {
            num1 = document.getElementById("comp").value;
            num2 = document.getElementById("larg").value;
            document.getElementById("m2").value = num1 * num2;
        }
    </script>

    <h1 class="titlePage">LAÇAMENTO DE PRODUÇÕES</h1>
    <hr/>


    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach

    <form class="formsProject" action="{{route('uploadProdution')}}" method="POST" autocomplete="off"
          enctype="multipart/form-data">
        @csrf


        <input type="hidden" name="Teamid" value="{{$id}}">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="item">Item</label>
                <input type="number" class="form-control" name="item" value="{{old('item')}}">
            </div>
            <div class="form-group col-md-3">
                <label for="dataprod">data</label>
                <input type="date" class="form-control" name="dataprod" value="{{old('dataprod')}}">
            </div>


            <div class="form-group col-md-6">
                <label for="inputRegiao">Lt</label>
                <select id="inputRegiao" class="form-control" name="inputRegiao" value="{{old('inputRegiao')}}"
                        required>
                    <option selected>Escolher...</option>

                    @foreach ($lts as $lt)
                        <option value='{{$lt->TLT_ID_PK}}'>
                            {{$lt->TLT_NOME}} - {{$lt->TLT_LOCAL}} - {{$lt->TLT_SIGLA}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="text">Vão </label>
                    <input type="number" class="form-control" name="vao" value="{{old('vao')}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="comp">Comprimento</label>
                    <input type="number" class="form-control" name="comp" id="comp" value="{{old('comp')}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="larg">Largura</label>
                    <input type="number" class="form-control" name="larg" id="larg" onChange="multiplica()">
                </div>

                <div class="form-group col-md-3">
                    <label for="result">Total M2</label>
                    <input type="number" class="form-control" name="result" id="m2" disabled>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-13">
                    <label for="text">Justificativa</label>
                    <textarea class="form-control" name="justificativa" id="text" cols="113" rows="3"
                              value="{{old('justificativa')}}"></textarea>

                </div>
            </div>

            <div class="form-row imgForm">
                <div class="form-group col-md-6">
                    <label for="nome">Imagem Antes</label>
                    <input type="file" class="form-control" name="img_antes" value="{{old('img_antes')}}">
                </div>


                <div class="form-group col-md-6">
                    <label for="nome">Imagem Depois</label>
                    <input type="file" class="form-control" name="img_depois" value="{{old('img_depois')}}">
                </div>
            </div>
        </div>

        <div class="bottuns">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('listTeams')}}" class="btn btn-warning">Voltar</a>
        </div>

    </form>

@endsection