<?php
include_once ("services/conexao.php");
include_once ("controller/controllerCategorias.php");
include_once ("model/modelCategorias.php");

$data = json_decode(file_get_contents('php://input'), true);

// Setar valores da requisição JSON nas variáveis do PHP

$nome = $data['nome'];
$id_status = $data['id_status'];

$controllerCategorias = new controllerCategorias();
$resultado = $controllerCategorias->cadastrarCategoria($nome, $id_status);

if($resultado) echo "deu bom";
?>