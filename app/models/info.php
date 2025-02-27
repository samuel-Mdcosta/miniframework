<?php
    namespace app\models;
    use MF\model\model;

    class info extends model{

        public function getInfo(){
            $query = "select titulo, descricao from tb_info";
            //retorna um pdo statement como um array
            return $this->db->query($query)->fetchAll();
        
        }
    }