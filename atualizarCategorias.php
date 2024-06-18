<?php

include_once ("services/conexao.php");
include_once ("controller/ControllerCategorias.php");
include_once ("model/modelCategorias.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];
$id_status = $data['id_status'];
$id_categoria = $data['id_categoria'];

$controllerCategorias = new controllerCategorias();
$resultado = $controllerCategorias->atualizarCategoria($nome, $id_status, $id_categoria);

if($resultado) echo "deu bom";