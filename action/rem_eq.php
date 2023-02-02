<?php
	require_once ('../model/Datashow.php');
	require_once ('../bd/Remover.php');
	session_start();

	$datashow = new Datashow();
	
	$cod = $_GET['code'];

	$datashow->setCod($cod);

	$cod = $datashow->getCod();
	
	$resul = removerEquipamento($cod);
	if ($resul == 1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Equipamento Removido com Exito!</div>";
		header("Location:../view/consulta.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Equipamento não foi removido!</div>";
		header("Location:../view/consulta.php");
	}
?>