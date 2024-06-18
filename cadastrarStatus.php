<?php

include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];


$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->cadastrarStatus($nome);


if($resultado) {
    $msg = array("msg" => "Cadastrado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao cadastrar o status!");
    echo json_encode($msg);
}