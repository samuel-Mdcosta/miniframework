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

            //recupera a classe que esta sendo executasa o action
            $classAtual = get_class($this);

            // ira diixar dinamico o nome da pagina
            $classAtual = str_replace('app\\controllers\\', '', $classAtual);
        
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            echo $classAtual;
            echo '<hr>';
            require_once __DIR__ . "/../views/".$classAtual."/".$view.".phtml";
        }
    }