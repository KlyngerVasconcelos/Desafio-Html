<?php
	require_once('../model/Administrador.php');
	require_once('Conexao.php');
	
	$conecta = new Conexao();
	$servidor = new Administrador();
	session_start();
	
	$servidor->setCpf($_POST['cpf']);
	$servidor->setSenha($_POST['senha']);
	
	$cpf = $servidor->getCpf();
	$senha = $servidor->getSenha();
	
	$result = mysqli_query($conecta->conexao(),"SELECT * FROM administrador WHERE cpf='$cpf' AND senha = '$senha';");
	
	
	if(mysqli_num_rows($result) > 0){
	$dados_servidor = mysqli_fetch_array($result);
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senha'] = $senha;
    echo "<script>location.href='../view/menu.php';</script>";

} else {
    unset ($_SESSION['cpf']);
    unset ($_SESSION['senha']);
    $_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha Inválido!</div>";
		header("Location:../index.php");
}
	
?>