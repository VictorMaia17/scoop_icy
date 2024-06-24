<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Atendimento{
		//Atributos
		private $cod;
 		private $loja_cod;
 		private $domingo;
 		private $segunda;
 		private $terca;
 		private $quarta;
 		private $quinta;
 		private $sexta;
 		private $sabado;
 		private $hora_abre;
 		private $hora_fecha;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getLoja_cod(){
			return $this->loja_cod;
		}
		public function getDomingo(){
			return $this->domingo;
		}
		public function getSegunda(){
			return $this->segunda;
		}
		public function getTerca(){
			return $this->terca;
		}
		public function getQuarta(){
			return $this->quarta;
		}
		public function getQuinta(){
			return $this->quinta;
		}
		public function getSexta(){
			return $this->sexta;
		}
		public function getSabado(){
			return $this->sabado;
		}
		public function getHora_abre(){
			return $this->hora_abre;
		}
		public function getHora_fecha(){
			return $this->hora_fecha;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setLoja_cod($loja_cod){
			$this->loja_cod=$loja_cod;
		}
		public function setDomingo($domingo){
			$this->domingo=$domingo;
		}
		public function setSegunda($segunda){
			$this->segunda=$segunda;
		}
		public function setTerca($terca){
			$this->terca=$terca;
		}
		public function setQuarta($quarta){
			$this->quarta=$quarta;
		}
		public function setQuinta($quinta){
			$this->quinta=$quinta;
		}
		public function setSexta($sexta){
			$this->sexta=$sexta;
		}
		public function setSabado($sabado){
			$this->sabado=$sabado;
		}
		public function setHora_abre($hora_abre){
			$this->hora_abre=$hora_abre;
		}
		public function setHora_fecha($hora_fecha){
			$this->hora_fecha=$hora_fecha;
		}
		
	}
?>