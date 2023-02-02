<?php
require "../bd/Verifica.php";
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Novo Equipamento</title>
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
                <h5 class="card-header">Novo Equipamento</h5>
                <div class="card-body">
                    <fieldset>
                        <?php 
                        if(isset($_SESSION['msgc'])){
                            echo $_SESSION['msgc'];
                            unset($_SESSION['msgc']);
                        }
                        if(isset($_SESSION['msge'])){
                            echo $_SESSION['msge'];
                            unset($_SESSION['msge']);
                        }
                        ?>
                        <div class="row">
                            <div class="container">
                                <form action="../action/cad_eq.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="local-cod">Código do Equipamento</label>
                                            <input type="text" class="form-control" name="cod" maxlength="6" pattern=".{6,}" title="preencha os 6 caracteres" placeholder="Digite o código" required autofocus>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="local-cod">Marca</label>
                                            <input type="text" class="form-control" name="marca" placeholder="Digite a marca" required autofocus>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="local-cod">Acessório</label>
                                            <input type="text" class="form-control" name="acessorio" placeholder="Informe os acessórios" required autofocus>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="marca">Marca</label>
                                            <input type="text" class="form-control" name="marca" placeholder="Digite a marca" required autofocus>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="acessorio">Acessório</label>
                                            <input type="text" class="form-control" name="acessorio" placeholder="Informe os acessórios">
                                        </div>
                                    </div> -->
                                    <div class="form-group form-float">
                                        <button class="btn btn-success btn-lg" type="submit">Salvar</button>
                                        <button type="reset" class="btn btn-danger btn-lg">Limpar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
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
