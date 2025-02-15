<?php
    namespace app\controllers;

    class indexController{
        public function index(){
            $dados = array('celular', 'computador');
            $this->render('index', $dados);
        }

        public function sobre_nos(){
            $dados = array('feijao', 'arroz');
            $this->render('sobreNos', $dados);
        }

        public function render($view, $dados){
            require_once __DIR__ . "/../views/index/".$view.".phtml";
        }
    }