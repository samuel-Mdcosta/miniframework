<?php
    namespace app\controllers;
    
    //miniframework
    use MF\controller\action;
    use MF\model\container;

    //models
    use app\models\produto;
    use app\models\info;


    class indexController extends action{

        public function index(){
            //$this->view->dados = array('celular', 'computador');
            $produto = container::getModel('produto');

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobre_nos(){
            //$this->view->dados = array('feijao', 'arroz');

            $info = container::getModel('info');

            $informacoes = $info->getInfo();
            
            $this->view->dados = $informacoes;

            $this->render('sobreNos', 'layout2');
        }
    }