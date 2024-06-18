<?php

class modelStatus {
    public function listarStatus() {
        try {
            $pdo = Database::conexao();
            $conexao = $pdo->query("SELECT * FROM tbl_status");
            $resultado = $conexao->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarStatus($nome) {
        try {
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_status (nome_status, data_cadastro) VALUES (:nome, now())");

            $inserir->bindParam(':nome', $nome);
            $inserir->execute();

            return true;
        } catch (PDOException $e) {
            return false; 
        }
    }

    public function atualizarStatus($nome, $id) {
        try {
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_status SET nome_status = :nome, data_atualizacao = now() WHERE id_status = :id");

            $atualizar->bindParam(':nome', $nome);
            $atualizar->bindparam(':id', $id);

            $atualizar->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}