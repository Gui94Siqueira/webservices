<?php

class controllerStatus {
    public function listarStatus() {
         try {
            $modelStatus = new modelStatus();
            return $modelStatus->listarStatus();
         } catch (PDOException $e) {
            return false;
         }
    }

    public function cadastrarStatus($nome) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->cadastrarStatus($nome);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarStatus($nome, $id) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->atualizarStatus($nome, $id);
        } catch (PDOException $e) {
            return false;
        }
    }
}
