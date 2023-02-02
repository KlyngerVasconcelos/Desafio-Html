<?php

	class Administrador{

		private $cpf;
		private $nome;
		private $senha;
		

		public function getCpf(){
			return $this->cpf;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
			return $this;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
			return $this;
		}
		
		public function getSenha(){
			return $this->senha;
		}
		
		public function setSenha($senha){
			$this->senha = $senha;
		return $this;
		}
	}
?>