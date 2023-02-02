<?php 
	require_once ('Conexao.php');

	function cadastrarEquipamento($cod,$marca,$acessorio,$situacao){
		$con = new Conexao();
		$sql = "INSERT INTO datashow (cod, marca, acessorio,situacao) VALUES ('$cod','$marca','$acessorio','$situacao')";
		$resultado = mysqli_query($con->conexao(),$sql);
		return $resultado;
	}

	function cadastrarServidor($siape,$nomee,$telefone,$email){
		$con = new Conexao();
		$sql = "INSERT INTO servidor (siape, nomee, telefone, email) VALUES ('$siape','$nomee','$telefone','$email')";
		$res = mysqli_query($con->conexao(),$sql);
		return $res;
	}

	function cadastrarDatashow_servidor($cod_ds_cod,$siape_ds_siape,$data,$complemento){
		$con = new Conexao();
		$sql = "INSERT INTO datashow_servidor (cod_ds_cod, siape_ds_siape, data, complemento) VALUES ('$cod_ds_cod','$siape_ds_siape','$data','$complemento')";
		$resultad = mysqli_query($con->conexao(),$sql);
		return $resultad;
	}
?>