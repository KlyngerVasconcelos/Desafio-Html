<?php 
	require_once ('Conexao.php');

	function removerEquipamento($cod){
		$con = new Conexao();
		$sql = "DELETE FROM datashow WHERE cod = '$cod'";
		$resul = mysqli_query($con->conexao(),$sql);
		
		return $resul;
	}

	function removerServidor($siape){
		$con = new Conexao();
		$sql = "DELETE FROM servidor WHERE siape = '$siape'";
		$result = mysqli_query($con->conexao(),$sql);
		
		return $result;
	}

	function removerarDatashow_servidor($cod_ds_cod){
		$con = new Conexao();
		$sql = "DELETE FROM datashow_servidor WHERE cod_ds_cod = '$cod_ds_cod'";
		$result = mysqli_query($con->conexao(),$sql);
		
		return $result;
	}
?>