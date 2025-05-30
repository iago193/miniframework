<?php

    namespace App\Models;

    use MF\Model\Model;

    class Produto extends Model {

        public function getProdutos() {
            $query = "SELECT id, descricao, preco FROM tb_produtos";
            $stmt = $this->db->query($query); $this->db->query($query);

            return $stmt->fetchAll(\PDO::FETCH_OBJ);

        }

    }

?>