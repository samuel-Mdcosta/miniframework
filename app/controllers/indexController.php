<?php
    namespace app\controllers;
    
    use MF\controller\action;

    class indexController extends action{

        public function index(){
            $this->view->dados = array('celular', 'computador');
            $this->render('index');
        }

        public function sobre_nos(){
            $this->view->dados = array('feijao', 'arroz');
            $this->render('sobreNos');
        }
    }