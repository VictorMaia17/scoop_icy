<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Dono{
		//Atributos
		private $cod;
 		private $email;
 		private $senha;
 		private $telefone;
 		private $nome;
 		private $cnpj;
 		private $cpf;
 		private $numero;
 		private $rua;
 		private $bairro;
 		private $cidade;
 		private $complemento;
 		private $login;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getCnpj(){
			return $this->cnpj;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getNumero(){
			return $this->numero;
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
		public function getComplemento(){
			return $this->complemento;
		}
		public function getLogin(){
			return $this->login;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setCnpj($cnpj){
			$this->cnpj=$cnpj;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setNumero($numero){
			$this->numero=$numero;
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
		public function setComplemento($complemento){
			$this->complemento=$complemento;
		}
		public function setLogin($login){
			$this->login=$login;
		}
		
	}
?>