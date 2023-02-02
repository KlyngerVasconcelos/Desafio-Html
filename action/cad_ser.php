<?php
	require_once ('../model/Servidor.php');
	require_once ('../bd/Cadastrar.php');
	session_start();

	$servidor = new Servidor();
	
	$nomee = $_POST['nomee'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$siape = $_POST['siape'];

	$servidor->setSiape($siape);
	$servidor->setNomee($nomee);
	$servidor->setTelefone($telefone);
	$servidor->setEmail($email);

	$siape = $servidor->getSiape();
	$nomee = $servidor->getNomee();
	$telefone = $servidor->getTelefone();
	$email = $servidor->getEmail();
	
	$res = cadastrarServidor($siape,$nomee,$telefone,$email);
	// require_once ('../bd/Conexao.php');
	// $con = new Conexao();
	// 	$sql = "INSERT INTO servidor (siape, nomee, telefone, email) VALUES ('$siape','$nomee','$telefone','$email')";
	// 	$res = mysqli_query($con->conexao(),$sql);
	// if(!$res){	//insere	os	dados	senão	mostra	o	erro
	// 	die('Error:'.mysqli_error($con)); 					
	// }

	if ($res == 1){
		unset($_SESSION['msgc']);
		$_SESSION['msgc'] = "<div class='alert alert-success' role='alert'>Servidor Cadastrado com Exito!</div>";
		header("Location:../view/novo_servidor.php");
	}else{
		unset($_SESSION['msge']);
		$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Ops! Servidor já se encontra cadastrado ou Campo telefone não foi preenchido corretamente!</div>";
		header("Location:../view/novo_servidor.php");
	}
?>