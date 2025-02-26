<?php
    namespace MF\controller;

    abstract class action{
        protected $view;

        public function __construct(){
            //classe naticva para a criacao de objetos padroes
            $this->view = new \stdClass; 
        }

        protected function render($view){

            //recupera a classe que esta sendo executasa o action
            $classAtual = get_class($this);

            // ira diixar dinamico o nome da pagina
            $classAtual = str_replace('app\\controllers\\', '', $classAtual);
        
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            require_once "../App/Views/".$classAtual."/".$view.".phtml";
        }
    }