<?php
    namespace app\controllers;
    
    use MF\controller\action;
    use app\connection;
    use app\models\produto;

    class indexController extends action{

        public function index(){
            //$this->view->dados = array('celular', 'computador');

            //instancia conecxao pdo
            $conn = connection::getDb();

            //instancia oo produto
            $produto = new produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobre_nos(){
            //$this->view->dados = array('feijao', 'arroz');
            $this->render('sobreNos', 'layout2');
        }
    }