<?php
	session_start();
	
		unset(	//apaga as var's.
			$_SESSION['cpf'],
			$_SESSION['senha']
		);
		$_SESSION['msge'] = "<div class='alert alert-warning' role='alert'>Deslogado com sucesso.</div>";
		header("Location:../index.php");
?>