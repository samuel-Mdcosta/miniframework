<?php
    namespace MF\controller;

    abstract class action{
        protected $view;

        public function __construct(){
            //classe naticva para a criacao de objetos padroes
            $this->view = new \stdClass;
        }

        protected function render($view, $layout){
            $this->view->page = $view;
            if(file_exists("../app/views/".$layout.".phtml")){
                require_once "../app/views/".$layout.".phtml"; 
            }else{
                $this->content();
            }
        }

        protected function content(){
            //recupera a classe que esta sendo executasa o action
            $classAtual = get_class($this);

            // ira diixar dinamico o nome da pagina
            $classAtual = str_replace('app\\controllers\\', '', $classAtual);
                    
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));
            
            require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml";
        }
    }