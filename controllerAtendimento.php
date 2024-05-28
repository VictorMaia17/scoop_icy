<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";
$atendimento = new Atendimento();
$lojaDAO = new AtendimentoDAO();

if($botao == "cadastrar"){

    $domingo = isset($_POST['domingo']) ? $_POST['domingo'] : "";
	$segunda = isset($_POST['segunda']) ? $_POST['segunda'] : "";
    $terca = isset($_POST['terca']) ? $_POST['terca'] : "";
    $quarta = isset($_POST['quarta']) ? $_POST['quarta'] : "";
	$quinta = isset($_POST['quinta']) ? $_POST['quinta'] : "";
	$sexta = isset($_POST['sexta']) ? $_POST['sexta'] : "";
	$sabado = isset($_POST['sabado']) ? $_POST['sabado'] : "";
	$hora_abre = isset($_POST['hora_abre']) ? $_POST['hora_abre'] : "";
	$hora_fecha = isset($_POST['hora_fecha']) ? $_POST['hora_fecha'] : "";

    $atendimento->setDomingo($domingo);  
	$atendimento->setSegunda($segunda);  
	$atendimento->setTerca($terca);
	$atendimento->setQuarta($quarta);
	$atendimento->setQuinta($quinta);
	$atendimento->setSexta($sexta);
	$atendimento->setSabado($sabado);
	$atendimento->setHora_abre($hora_abre);
	$atendimento->setHora_fecha($hora_fecha);

    $resultado = $atendimentoDAO->inserir($atendimento);

}

?>