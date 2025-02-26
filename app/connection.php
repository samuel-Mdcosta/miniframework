<?php
    namespace app;

use PDO;
use PDOException;

    class connection{

        public static function getDb(){

            try{
                $conn = new PDO(
                    "mysql:host=localhost;dbname=miniframework;charset=utf8",
                    "root",
                    ""
                );
                return $conn;
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

    }
        
?>