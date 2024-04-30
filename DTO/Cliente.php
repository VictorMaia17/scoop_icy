<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $cod;

 		private $nome;

 		private $rg;

 		private $cpf;

 		private $email;

 		private $telefone;

 		private $senha;

 		private $login;

 		private $rua;

 		private $numero;

 		private $bairro;

 		private $cidade;

 		private $complemento;

		 private $fotos;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->cod;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getRg(){
			return $this->rg;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function getLogin(){
			return $this->login;
		}

		public function getRua(){
			return $this->rua;
		}

		public function getNumero(){
			return $this->numero;
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

		public function getFotos(){
			return $this->fotos;
		}
		
		public function setCod($cod){
			$this->cod=$cod;
		}

		public function setNome($nome){
			$this->nome=$nome;
		}

		public function setRg($rg){
			$this->rg=$rg;
		}

		public function setCpf($cpf){
			$this->cpf=$cpf;
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}

		public function setSenha($senha){
			$this->senha=$senha;
		}

		public function setLogin($login){
			$this->login=$login;
		}

		public function setRua($rua){
			$this->rua=$rua;
		}

		public function setNumero($numero){
			$this->numero=$numero;
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

		public function setFotos($fotos){
			$this->fotos=$fotos;
		}
	}
?>