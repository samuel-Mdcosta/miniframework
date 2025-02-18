<?php
    namespace app\controllers;

    class indexController{

        private $view;

        public function __construct(){
            //classe naticva para a criacao de objetos padroes
            $this->view = new \stdClass; 
        }

        public function index(){
            $this->view->dados = array('celular', 'computador');
            $this->render('index');
        }

        public function sobre_nos(){
            $this->view->dados = array('feijao', 'arroz');
            $this->render('sobreNos');
        }

        public function render($view){

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