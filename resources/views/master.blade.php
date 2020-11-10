<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <title>ERP Controle de Podas</title>
</head>

<body>
<header class="cabecalho">
    <h1>ERP PODAS</h1>
    <h2>Sistema de Gerenciamento</h2>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <img src="{{asset('image/logopodas.png')}}" width="40" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler  navbar-light" type="button" data-toggle="collapse"
                data-target="#conteudoNavbarSuportado"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active menuMaster">
                    <a class="nav-link" href="{{route('dashboard')}}">Inicio </a>
                </li>
                <li class="nav-item dropdown menuMaster">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu subItens" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('regiterUser')}}">Usuários</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('listWorks')}}">Funcionários</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('listTeams')}}">Equipes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('listLts')}}">LT's</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Regiões</a>
                    </div>
                </li>
                <li class="nav-item dropdown menuMaster">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lançamentos
                    </a>
                    <div class="dropdown-menu subItens" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produção Diaria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">...</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">...</a>
                    </div>
                </li>
                <li class="nav-item dropdown menuMaster">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu subItens" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produção Diaria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">...</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">...</a>
                    </div>
                </li>
                <li class="nav-item active menuMaster">
                    <a class="nav-link" href="{{route('logout')}}">Sair </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">

    @yield('content')

</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>

<footer>
    CaioCof © 2020 - <?= date('Y'); ?>
</footer>


</body>

</html>





