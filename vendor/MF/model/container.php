<?php
    namespace MF\model;

use app\connection;

    class container{
        public static function getModel($model){

            //instancia do modelo
            $class = "\\app\\models\\".ucfirst($model);
            $conn = connection::getDb();
            return new $class($conn);
        }
    }