<?php
    namespace app\models;

    class produto{
        protected $db;

        public function __construct(\PDO $db){
            $this->db = $db;
        }

        public function getProdutos(){
            return array('mesa');
        }
    }