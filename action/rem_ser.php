<?php
	require_once ('../model/Servidor.php');
	require_once ('../bd/Remover.php');
	session_start();

	$servidor = new Servidor();
	
	$siape = $_GET['cods'];

	$servidor->setSiape($siape);

	$siape = $servidor->getSiape();
	
	$result = removerServidor($siape);
	if ($result == 1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Servidor Removido com Exito!</div>";
		header("Location:../view/listar_servidor.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Servidor não foi removido!</div>";
		header("Location:../view/listar_servidor.php");
	}
?>