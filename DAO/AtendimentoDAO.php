<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class AtendimentoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM atendimentos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM atendimentos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM atendimentos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM atendimentos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($atendimento){
		include("conexao.php");
		$sql = 'INSERT INTO atendimentos (cod, loja_cod, domingo, segunda, terca, quarta, quinta, sexta, sabado, hora_abre, hora_fecha) VALUES (:cod, :loja_cod, :domingo, :segunda, :terca, :quarta, :quinta, :sexta, :sabado, :hora_abre, :hora_fecha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$atendimento->getCod()); 
		$consulta->bindValue(':loja_cod',$atendimento->getLoja_cod()); 
		$consulta->bindValue(':domingo',$atendimento->getDomingo()); 
		$consulta->bindValue(':segunda',$atendimento->getSegunda()); 
		$consulta->bindValue(':terca',$atendimento->getTerca()); 
		$consulta->bindValue(':quarta',$atendimento->getQuarta()); 
		$consulta->bindValue(':quinta',$atendimento->getQuinta()); 
		$consulta->bindValue(':sexta',$atendimento->getSexta()); 
		$consulta->bindValue(':sabado',$atendimento->getSabado()); 
		$consulta->bindValue(':hora_abre',$atendimento->getHora_abre()); 
		$consulta->bindValue(':hora_fecha',$atendimento->getHora_fecha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($atendimento){
		include("conexao.php");
		$sql = 'UPDATE atendimentos SET cod = :cod, loja_cod = :loja_cod, domingo = :domingo, segunda = :segunda, terca = :terca, quarta = :quarta, quinta = :quinta, sexta = :sexta, sabado = :sabado, hora_abre = :hora_abre, hora_fecha = :hora_fecha WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$atendimento->getCod()); 
		$consulta->bindValue(':loja_cod',$atendimento->getLoja_cod()); 
		$consulta->bindValue(':domingo',$atendimento->getDomingo()); 
		$consulta->bindValue(':segunda',$atendimento->getSegunda()); 
		$consulta->bindValue(':terca',$atendimento->getTerca()); 
		$consulta->bindValue(':quarta',$atendimento->getQuarta()); 
		$consulta->bindValue(':quinta',$atendimento->getQuinta()); 
		$consulta->bindValue(':sexta',$atendimento->getSexta()); 
		$consulta->bindValue(':sabado',$atendimento->getSabado()); 
		$consulta->bindValue(':hora_abre',$atendimento->getHora_abre()); 
		$consulta->bindValue(':hora_fecha',$atendimento->getHora_fecha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM atendimentos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>