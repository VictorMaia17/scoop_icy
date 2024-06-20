<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $cod;
 		private $nome;
 		private $numero;
 		private $rua;
 		private $telefone;
 		private $bairro;
 		private $cidade;
 		private $email;
 		private $senha;
 		private $complemento;
 		private $login;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getComplemento(){
			return $this->complemento;
		}
		public function getLogin(){
			return $this->login;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setComplemento($complemento){
			$this->complemento=$complemento;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		
	}
?>