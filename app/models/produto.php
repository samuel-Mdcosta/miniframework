<?php
    namespace app\models;
    use PDO;

    class produto{
        protected $db;

        public function __construct(PDO $db){
            $this->db = $db;
        }

        public function getProdutos(){
            $query = "select id, descricao, preco from tb_produtos";
            //retorna um pdo statement como um array
            return $this->db->query($query)->fetchAll();
        
        }
    }