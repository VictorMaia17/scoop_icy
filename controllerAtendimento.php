<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";
$atendimento = new Atendimento();
$lojaDAO = new AtendimentoDAO();

if($botao == "cadastrar"){


	$hora_abre = "";
	$hora_fecha = "";

	//ADICIONA OS DIAS EM QUE A EMPRESA FUNCIONA
	$dias_selecionados = isset($_POST['dias_selecionados']) ? $_POST['dias_selecionados'] : "";

    $dias_semana = [

		["domingo", ""],
		["segunda", ""],
		["terca", ""],
		["quarta", ""],
		["quinta", ""],
		["sexta", ""],
		["sabado", ""]

	];

	foreach($dias_semana as $dia){

		foreach($dias_selecionados as $selecionados){

			if($dia[0] == $selecionados){

				$dia[1] == "1";

			}

			else{

				$dia[1] == "0";

			}
		
	}
	}

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