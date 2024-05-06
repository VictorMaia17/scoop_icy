<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Complemento{
		//Atributos
		private $cod;
 		private $nome;
 		private $disponibilidade;
 		private $loja;
 		private $classificacao;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDisponibilidade(){
			return $this->disponibilidade;
		}
		public function getLoja(){
			return $this->loja;
		}
		public function getClassificacao(){
			return $this->classificacao;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setDisponibilidade($disponibilidade){
			$this->disponibilidade=$disponibilidade;
		}
		public function setLoja($loja){
			$this->loja=$loja;
		}
		public function setClassificacao($classificacao){
			$this->classificacao=$classificacao;
		}
		
	}
?>