<?php
    namespace app\models;

    class info{
        protected $db;

        public function __construct(\PDO $db){
            $this->db = $db;
        }

        public function getInfo(){
            $query = "select titulo, descricao from tb_info";
            //retorna um pdo statement como um array
            return $this->db->query($query)->fetchAll();
        
        }
    }