<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */

include(__DIR__ . '/../config/config.php');	
	   
class ProdutoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM produtos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM produtos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM produtos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include(CONEXAO_PATH);
		$sql = 'DELETE FROM produtos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($produto){
		include(CONEXAO_PATH);
		$sql = 'INSERT INTO produtos (cod, nome, descricao, preco, disponibilidade, foto, loja, classificacao) VALUES (:cod, :nome, :descricao, :preco, :disponibilidade, :foto, :loja, :classificacao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 

		$consulta->bindValue(':nome',$produto->getNome()); 

		$consulta->bindValue(':descricao',$produto->getDescricao()); 

		$consulta->bindValue(':preco',$produto->getPreco()); 

		$consulta->bindValue(':disponibilidade',$produto->getDisponibilidade()); 

		$consulta->bindValue(':foto',$produto->getFoto()); 

		$consulta->bindValue(':loja',$produto->getLoja()); 

		$consulta->bindValue(':classificacao',$produto->getClassificacao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($produto){
		include(CONEXAO_PATH);
		$sql = 'UPDATE produtos SET cod = :cod, nome = :nome, descricao = :descricao, preco = :preco, disponibilidade = :disponibilidade, foto = :foto, loja = :loja, classificacao = :classificacao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 

		$consulta->bindValue(':nome',$produto->getNome()); 

		$consulta->bindValue(':descricao',$produto->getDescricao()); 

		$consulta->bindValue(':preco',$produto->getPreco()); 

		$consulta->bindValue(':disponibilidade',$produto->getDisponibilidade()); 

		$consulta->bindValue(':foto',$produto->getFoto()); 

		$consulta->bindValue(':loja',$produto->getLoja()); 

		$consulta->bindValue(':classificacao',$produto->getClassificacao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include(CONEXAO_PATH);
		$sql = 'DELETE FROM produtos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>