<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $cod;
 		private $nome;
 		private $descricao;
 		private $preco;
 		private $disponibilidade;
 		private $foto;
 		private $loja;
 		private $classificacao;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function getDisponibilidade(){
			return $this->disponibilidade;
		}
		public function getFoto(){
			return $this->foto;
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
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		public function setDisponibilidade($disponibilidade){
			$this->disponibilidade=$disponibilidade;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		public function setLoja($loja){
			$this->loja=$loja;
		}
		public function setClassificacao($classificacao){
			$this->classificacao=$classificacao;
		}
		
	}
?>