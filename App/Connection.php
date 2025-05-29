<?php

    namespace App;

    use PDO;
    use PDOException;

    class Connection {

        private $host = 'localhost';
        private $dataBase = 'mvc';
        private $user = 'root';
        private $senha = '';

        public function getDb() {

            try {
                $conn = new PDO(
                    "mysql:host={$this->host};dbname={$this->dataBase};charset=utf8",
                    $this->user,
                    $this->senha
                );

                // Ativar modo de erro do PDO
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conn;

            } catch (PDOException $e) {
                // Tratar erro
                echo 'Erro na conexão: ' . $e->getMessage();
                return null;
            }
        }
    }


?>