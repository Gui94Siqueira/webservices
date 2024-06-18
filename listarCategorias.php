<?php

include_once("services/conexao.php");
include_once("controller/controllerCategorias.php");
include_once("model/modelCategorias.php");

$controllerCategorias = new ControllerCategorias();
$resultado = $controllerCategorias->listarCategorias();

$retorno = array("categorias" => $resultado);
echo json_encode($retorno);