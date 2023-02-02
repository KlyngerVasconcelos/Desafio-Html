<?php
require "../bd/Verifica.php";
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sobre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../templates/css/estilo.css">
    </head>
    <body>

        <!-- Barra de Navegação -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="menu.php"><span class="img-logo">Assets Manager</span></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#togglenavbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Alternar navegação</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="togglenavbar" class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="menu.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Data Show
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="saida.php">Empréstimo</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="entrada.php">Devolução</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servidor
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="novo_servidor.php">Cadastrar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="listar_servidor.php">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="novo_equipamento.php">Novo Equipamento</a></li>
                        <li class="nav-item"><a class="nav-link" href="consulta.php">Consultar</a></li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="../bd/Sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Conteúdo -->
        <div class="content-sobre container">
            <div class="card">
              <h5 class="card-header">Sobre</h5>
              <div class="card-body">
                <p class="card-text">Este sistema foi construído com o objetivo de facilitar solicitação de reservas de DataShow.</p>
                <h5 class="card-title">Desenvolvimento</h5>
                <p class="card-text">Kheite</p>
                <p class="card-text">Priscila</p>
                <p class="card-text">Cássia</p>
            </div>
        </div>
    </div>

        <!-- JS -->
        <script src="../templates/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                $('[data-toggle="popover"]').popover()
            })
        </script>
        <script src="../templates/bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="../templates/bootstrap/js/bootstrap.min.js" ></script>
    </body>
</html>
