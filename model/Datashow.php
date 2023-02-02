<?php

	class Datashow{

		private $cod;
		private $marca;
		private $acessorio;
		private $situacao;
		

		public function getCod(){
			return $this->cod;
		}
		
		public function setCod($cod){
			$this->cod = $cod;
			return $this;
		}
		
		public function getMarca(){
			return $this->marca;
		}
		
		public function setMarca($marca){
			$this->marca = $marca;
			return $this;
		}
		
		public function getAcessorio(){
			return $this->acessorio;
		}
		
		public function setAcessorio($acessorio){
			$this->acessorio = $acessorio;
		return $this;
		}

		public function getSituacao(){
			return $this->situacao;
		}
		
		public function setSituacao($situacao){
			$this->situacao = $situacao;
		return $this;
		}
	}
?>