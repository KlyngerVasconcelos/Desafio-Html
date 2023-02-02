<?php
	require_once ('../model/Datashow.php');
	require_once ('../model/Datashow_servidor.php');
	require_once ('../bd/Remover.php');
	require_once ('../bd/Alterar.php');
	session_start();

	$datashow = new Datashow();

	$situacao = "0";
	$datashow->setSituacao($situacao);
	$situacao = $datashow->getSituacao();

	$datashow_servidor = new Datashow_servidor();

	$cod_ds_cod = $_GET['codds'];
	$datashow_servidor->setCod_ds_cod($cod_ds_cod);
	$cod_ds_cod = $datashow_servidor->getCod_ds_cod();
	

	$res = atualizarSitDatashow($cod_ds_cod,$situacao);

	$result = removerarDatashow_servidor($cod_ds_cod);

	if ($result == 1 && $res==1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Devolução realizada com sucesso!</div>";
		header("Location:../view/entrada.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Não foi possível realizar a devolução!</div>";
		header("Location:../view/entrada.php");
	}
?>