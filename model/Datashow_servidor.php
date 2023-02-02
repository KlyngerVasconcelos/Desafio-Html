<?php

	class Datashow_servidor{

		private $cod_ds_cod;
		private $siape_ds_siape;
		private $data;
		private $complemento;
		

		public function getCod_ds_cod(){
			return $this->cod_ds_cod;
		}
		
		public function setCod_ds_cod($cod_ds_cod){
			$this->cod_ds_cod = $cod_ds_cod;
			return $this;
		}
		
		public function getSiape_ds_siape(){
			return $this->siape_ds_siape;
		}
		
		public function setSiape_ds_siape($siape_ds_siape){
			$this->siape_ds_siape = $siape_ds_siape;
			return $this;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setData($data){
			$this->data = $data;
		return $this;
		}

		public function getComplemento(){
			return $this->complemento;
		}
		
		public function setComplemento($complemento){
			$this->complemento = $complemento;
		return $this;
		}
	}
?>