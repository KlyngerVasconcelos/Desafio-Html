<?php 
      session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Login</title>

		<link rel="stylesheet" href="templates/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="templates/css/login.css">
        <script  src="templates/bootstrap/js/bootstrap.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="templates/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var $seuCampoCpf = $("#cpf");
                $seuCampoCpf.mask('000.000.000-00', {reverse: true});
            });
        </script>
	</head>
	<body>
		<div class="login-form">
			<form method="post" autocomplete="off" action="bd/Validar.php" name="formlogin" class="form-signin">
				<div class="avatar">
					<img src="templates/img/a.png" alt="Avatar">
				</div>
				<h2 class="text-center">SEDS - Login</h2>  
				<?php 
				if(isset($_SESSION['msge'])){
					echo $_SESSION['msge'];
					unset($_SESSION['msge']);
				}
				?> 
				<div class="form-group">
					<input type="text" name="cpf" class="form-control" pattern=".{14,}" title="preencha os 11 caracteres." placeholder="Digite seu CPF" id="cpf" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" name="senha" maxlength="6" class="form-control" pattern=".{6,}" title="preencha os 6 caracteres" placeholder="Digite sua senha" required>
				</div>        
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
				</div>
			</form>
		</div>
	</body>
</html>                            