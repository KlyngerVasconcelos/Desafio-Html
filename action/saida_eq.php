<?php
	require_once ('../model/Datashow.php');
	require_once ('../model/Datashow_servidor.php');
	require_once ('../bd/Cadastrar.php');
	require_once ('../bd/Alterar.php');
	session_start();

	$datashow_servidor = new Datashow_servidor();
	
	$siape_ds_siape = $_POST['siape'];
	$cod_ds_cod = $_POST['cod_ds_cod'];
	$dt = $_POST['data'];
	$complemento = $_POST['complemento'];

	$data = date('d/m/Y',  strtotime($dt));

	$datashow_servidor->setSiape_ds_siape($siape_ds_siape);
	$datashow_servidor->setCod_ds_cod($cod_ds_cod);
	$datashow_servidor->setData($data);
	$datashow_servidor->setComplemento($complemento);

	$siape_ds_siape = $datashow_servidor->getSiape_ds_siape();
	$cod_ds_cod = $datashow_servidor->getCod_ds_cod();
	$data = $datashow_servidor->getData();
	$complemento = $datashow_servidor->getComplemento();
	
	$resultad = cadastrarDatashow_servidor($cod_ds_cod,$siape_ds_siape,$data,$complemento);

	$datashow = new Datashow();

	$situacao = "1";

	$datashow->setSituacao($situacao);
	$situacao = $datashow->getSituacao();

	$res = atualizarSitDatashow($cod_ds_cod,$situacao);

	if ($resultad == 1 && $res==1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Empréstimo realizado com sucesso!</div>";
		header("Location:../view/saida.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Não foi possível realizar o empréstimo!</div>";
		header("Location:../view/saida.php");
	}
?>