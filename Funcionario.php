<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Funcionario{
		//Atributos
		private $nome;
 		private $telefone;
 		private $email;
 		private $login;
 		private $rg;
 		private $senha;
 		private $cpf;
 		private $cod;
 		private $rua;
 		private $bairro;
 		private $cidade;
 		private $numero;
 		private $complemento;
 				
		//Métodos Getters e Setters
		public function getNome(){
			return $this->nome;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getRg(){
			return $this->rg;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getCod(){
			return $this->cod;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getComplemento(){
			return $this->complemento;
		}
		
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		public function setRg($rg){
			$this->rg=$rg;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setComplemento($complemento){
			$this->complemento=$complemento;
		}
		
	}
?>