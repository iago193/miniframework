<?php

    namespace App;

    use PDO;
    use PDOException;

    class Connection {

        private $host = 'localhost';
        private $dataBase = 'db_argo';
        private $user = 'root';
        private $senha = '';

        public function getDb() {

            try {
                $conexao = new PDO(
                    "mysql:host={$this->host};dbname={$this->dataBase};charset=utf8",
                    $this->user,
                    $this->senha
                );

                // Ativar modo de erro do PDO
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conexao;

            } catch (PDOException $e) {
                // Tratar erro
                echo 'Erro na conexão: ' . $e->getMessage();
                return null;
            }
        }
    }


?>