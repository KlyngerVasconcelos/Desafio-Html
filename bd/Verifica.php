<?php

// Inicia sessões
session_start();
// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["cpf"]) || !isset($_SESSION["senha"]))
{
	$_SESSION['msge'] = "<div class='alert alert-danger' role='alert'>Usuário não Logado! Login Obrigatório.</div>";
		header("Location:../index.php");
}
?>