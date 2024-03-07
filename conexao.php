<?php

//banco do pc do colégio
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco = "scoop_icy";

//banco do tablet
$servidor2 = '0.0.0.0';
$usuario2 = 'root';
$senha2 = 'root';
$nomeDoBanco2 = 'scoopy';

try {
	$conexao = new PDO("mysql:dbname=$nomeDoBanco; host=$servidor", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
	
	 try {
	   
  	$conexao = new PDO("mysql:dbname=$nomeDoBanco2; host=$servidor2", $usuario2, $senha2);
	  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $conexao -> exec("SET CHARACTER SET utf8");
	  
  } catch(PDOException $e2) {
	
      echo 'ERROR: ' . $e2->getMessage();

  }
}
	
?>