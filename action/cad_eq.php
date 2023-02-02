<?php
	require_once ('../model/Datashow.php');
	require_once ('../bd/Cadastrar.php');
	session_start();

	$datashow = new Datashow();
	
	$cod = $_POST['cod'];
	$marca = $_POST['marca'];
	$acessorio = $_POST['acessorio'];
	$situacao = "0";

	$datashow->setCod($cod);
	$datashow->setMarca($marca);
	$datashow->setAcessorio($acessorio);
	$datashow->setSituacao($situacao);

	$cod = $datashow->getCod();
	$marca = $datashow->getMarca();
	$acessorio = $datashow->getAcessorio();
	$situacao = $datashow->getSituacao();
	
	$resultado = cadastrarEquipamento($cod,$marca,$acessorio,$situacao);
	if ($resultado == 1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Equipamento Cadastrado com Exito!</div>";
		header("Location:../view/novo_equipamento.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Equipamento já se encontra cadastrado!</div>";
		header("Location:../view/novo_equipamento.php");
	}
?>