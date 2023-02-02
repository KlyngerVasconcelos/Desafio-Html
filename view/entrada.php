<?php
require "../bd/Verifica.php";
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Devolução</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../templates/css/estilo.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
                <h5 class="card-header">Devolução de Data Show</h5>
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
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Responsável</th>
                                        <th>Código</th>
                                        <th>Data</th>
                                        <th>Complemento</th>
                                        <th>Situação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Responsável</th>
                                        <th>Código</th>
                                        <th>Data</th>
                                        <th>Complemento</th>
                                        <th>Situação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    require_once ('../bd/Conexao.php');
                                    $con = new Conexao();
                                    $cont=0;
                                    $sqlds = "SELECT * FROM datashow_servidor";

                                    $resultado = mysqli_query($con->conexao(),$sqlds);
                                    while($sqlds = mysqli_fetch_array($resultado)){
                                        ?>
                                        <tr>
                                            <td> <?php echo $cont+=1; ?></td>
                                            <td>
                                                 <?php
                                                 $sql_res = "SELECT servidor.`nomee` FROM servidor INNER JOIN datashow_servidor on datashow_servidor.`siape_ds_siape` = servidor.`siape` WHERE datashow_servidor.`cod_ds_cod` = '$sqlds[cod_ds_cod]'"; 

                                                 $res = mysqli_query($con->conexao(),$sql_res);
                                                 while($sql_res = mysqli_fetch_array($res)){
                                                   echo $sql_res['nomee']; }
                                                 ?>
                                            </td>
                                            <td> <?php echo $sqlds['cod_ds_cod']; ?></td>
                                            <td> <?php echo $sqlds['data']; ?></td>
                                            <td> <?php echo $sqlds['complemento']; ?></td>
                                            <td> <a href="../action/edi_sit_eq.php?codds=<?php echo $sqlds['cod_ds_cod']; ?>" onclick="return confirm('Confirmar a devolução do equipamento?')" class="badge badge-info">Ocupado</a></td> 
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
        <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                    }
                });
            } );
        </script>
    </body>
</html>
