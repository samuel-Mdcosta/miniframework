<?php
    namespace MF\model;

    abstract class model{
        protected $db;

        public function __construct(\PDO $db){
            $this->db = $db;
        }
    }