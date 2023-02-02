<?php 
	
	require_once ('Conexao.php');


	function atualizarSitDatashow($cod_ds_cod,$situacao){
		$con = new Conexao();
		$sql = "UPDATE datashow SET situacao = '$situacao' WHERE cod = '$cod_ds_cod'";
		$res = mysqli_query($con->conexao(),$sql);

		return $res;
	}
?>