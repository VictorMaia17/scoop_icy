<?php
//CAMINHO PARA O DIRETÓRIO
if (!defined("BASE_PATH")){
    define("BASE_PATH", realpath(__DIR__. "/.."));
}

//CAMINHO DE CONEXAO.PHP
if (!defined("CONEXAO_PATH")){
define('CONEXAO_PATH', BASE_PATH . '/conexao.php');
}

?>