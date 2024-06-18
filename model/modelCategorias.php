<?php

class modelCategorias
{
    public function listarCategorias()
    {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_categorias");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }


    public function cadastrarCategoria($nome, $id_status) {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_categorias (nome_categoria, id_status, data_cadastro)
            VALUES (:nome, :id_status, now())");

            $inserir->bindParam(':nome', $nome);
            $inserir->bindParam(':id_status', $id_status);

            $inserir->execute();

            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function atualizarCategoria($nome, $id_status, $id_categoria) {
        try {
            $pdo = Database::conexao();
            $sql = "UPDATE tbl_categorias SET nome_categoria = :nome, id_status = :id_status, data_atualizacao = now() WHERE id_categoria = :id_categoria";
            $atualizar = $pdo->prepare($sql);

            $atualizar->bindParam(':nome', $nome);
            $atualizar->bindParam(':id_status', $id_status);
            $atualizar->bindParam(':id_categoria', $id_categoria);
            
            $atualizar->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}