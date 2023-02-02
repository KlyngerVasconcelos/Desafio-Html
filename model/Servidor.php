<?php

	class Servidor{

		private $siape;
		private $nomee;
		private $telefone;
		private $email;
		

		public function getSiape(){
			return $this->siape;
		}
		
		public function setSiape($siape){
			$this->siape = $siape;
			return $this;
		}
		
		public function getNomee(){
			return $this->nomee;
		}
		
		public function setNomee($nomee){
			$this->nomee = $nomee;
			return $this;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}
		
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		return $this;
		}

		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
		return $this;
		}
	}
?>