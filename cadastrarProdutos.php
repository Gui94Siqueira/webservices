<?php

include_once ("services/conexao.php");
include_once ("controller/ControllerProdutos.php");
include_once ("model/modelProdutos.php");

$data = json_decode(file_get_contents('php://input'), true);

// Setar valores da requisição JSON nas variáveis do PHP

$nome = $data['nome'];
$preco = $data['preco'];
$id_categoria = $data['id_categoria'];
$descricao = $data['descricao'];
$imagem = $data['imagem'];

$controllerProdutos = new controllerProdutos();
$resultado = $controllerProdutos->cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem);

if($resultado) echo "deu bom";