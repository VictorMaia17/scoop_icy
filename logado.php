<?php
session_start();

echo("Deu certo!!!");

if(isset($_SESSION['usuario'])){
    echo("<a href='deslogar.php'>Deslogar</a>");
}else{
    header("location:login.php");
}

?>