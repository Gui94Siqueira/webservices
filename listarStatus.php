<?php
include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$controllerStatus = new ControllerStatus();
$resultado = $controllerStatus->listarStatus();

$retorno = array("Status" => $resultado);
echo json_encode($retorno);
