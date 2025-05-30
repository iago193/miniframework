<?php

    namespace App\Models;

    class Info {
        protected $db;

        public function __construct(\PDO $db) {
            $this->db = $db;

        }

        public function getInfo() {
            $query = "SELECT titulo, descricao FROM tb_info";
            $stmt = $this->db->query($query); $this->db->query($query);

            return $stmt->fetchAll(\PDO::FETCH_OBJ);

        }

    }

?>