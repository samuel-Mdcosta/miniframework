<?php
    namespace app\models;
    use MF\model\model;

    class produto extends model{

        public function getProdutos(){
            $query = "select id, descricao, preco from tb_produtos";
            //retorna um pdo statement como um array
            return $this->db->query($query)->fetchAll();
        
        }
    }