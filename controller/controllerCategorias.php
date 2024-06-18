<?php

class controllerCategorias
{

    public function listarCategorias()
    {
        try {
            $modelCategorias = new modelCategorias();
            return $modelCategorias->listarCategorias();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarCategoria($nome, $id_status) {
        try {
            $modelCategorias = new modelCategorias();
            return $modelCategorias->cadastrarCategoria($nome, $id_status);

        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarCategoria($nome, $id_status, $id_categoria) {
        try {
            $modelCategorias = new modelCategorias();
            return $modelCategorias->atualizarCategoria($nome, $id_status, $id_categoria);
        } catch (PDOException $e) {
            return false;
        }
    }

}