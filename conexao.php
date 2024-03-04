<?php

//banco do pc do colégio
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco = "scoop_icy";

//banco do tablet
$servidor2 = 'mysqladmin';
$usuario2 = 'root';
$senha2 = '';
$nomeDoBanco2 = 'scoopy';

try {
	$conexao = new PDO("mysql:dbname=$nomeDoBanco; host=$servidor", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>	
