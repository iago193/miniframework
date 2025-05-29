<?php

    namespace App\Models;

    class Produto {
        protected $db;

        public function __construct(\PDO $db) {
            $this->db = $db;

        }

        public function getProdutos() {
            $query = "SELECT id, descricao, preco FROM tb_produtos";
            $stmt = $this->db->query($query); $this->db->query($query);

            return $stmt->fetchAll(\PDO::FETCH_OBJ);

        }

    }

?>