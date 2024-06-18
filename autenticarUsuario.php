<?php

    include_once ("services/conexao.php");
    include_once ("controller/controllerUsuarios.php");
    include_once ("model/modelUsuarios.php");

    $data = json_decode(file_get_contents('php://input'), true);

    //Dados login
    $email = $data['email_usuario'];
    $senha = $data['senha_usuario'];

    $controllerUsuarios = new controllerUsuarios();
    $resultado = $controllerUsuarios->autenticarUsuario($email, $senha);

    if($resultado) {
        $msg = array("msg" => "usuario vàlido", "usuario" => $resultado);
        echo json_encode($msg);
    } else {
        $msg = array("msg" => "usuario e/ou senha inváidos", "usuario" => []);
        echo json_encode($msg);
    }