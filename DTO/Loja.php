<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Loja{
		//Atributos
		private $nome;
 		private $cod;
 		private $cnpj;
 		private $email;
 		private $senha;
 		private $numero;
 		private $rua;
 		private $bairro;
 		private $cidade;
 		private $complemento;
 		private $login;
 		private $status;
 		private $logo;
 		private $foto_fundo;
 		private $descricao;
 		private $dias;
 		private $instagram;
 		private $facebook;
 		private $taxa_entrega;
 				
		//Métodos Getters e Setters
		public function getNome(){
			return $this->nome;
		}
		public function getCod(){
			return $this->cod;
		}
		public function getCnpj(){
			return $this->cnpj;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
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
		public function getStatus(){
			return $this->status;
		}
		public function getLogo(){
			return $this->logo;
		}
		public function getFoto_fundo(){
			return $this->foto_fundo;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getDias(){
			return $this->dias;
		}
		public function getInstagram(){
			return $this->instagram;
		}
		public function getFacebook(){
			return $this->facebook;
		}
		public function getTaxa_entrega(){
			return $this->taxa_entrega;
		}
		
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setCod($cod){
			$this->cod=$cod;
		}
		public function setCnpj($cnpj){
			$this->cnpj=$cnpj;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setSenha($senha){
			$this->senha=$senha;
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
		public function setStatus($status){
			$this->status=$status;
		}
		public function setLogo($logo){
			$this->logo=$logo;
		}
		public function setFoto_fundo($foto_fundo){
			$this->foto_fundo=$foto_fundo;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setDias($dias){
			$this->dias=$dias;
		}
		public function setInstagram($instagram){
			$this->instagram=$instagram;
		}
		public function setFacebook($facebook){
			$this->facebook=$facebook;
		}
		public function setTaxa_entrega($taxa_entrega){
			$this->taxa_entrega=$taxa_entrega;
		}
		
	}
?>