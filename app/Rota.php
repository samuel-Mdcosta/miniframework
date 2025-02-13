<?php
    //especificacao espera que o script tenha o mesmo namespace do diretorio
    namespace app;

    class Rota{
        
        //atritubuto privado so pode ser acessado por essa classe
        private $routes;

        //contrutor para que toda vexz que a classe for acessada a funcao initroutes 
        //seja executada de acordo com a rota desejada do usuario
        public function __construct(){
            $this->initRoutes();
            // apos iniciar o objeto, chama a funcao run para executar a requisicao
            //o parametro retorna o path da url que o usuario esta
            $this->run($this->getUrl());
        }

        //get e set so atributo routes
        public function getRoutes(){
            return $this->routes;
        }

        public function setRoutes(array $routes){
            $this->routes = $routes;
        }



        //inicia uma rota, dependendo da onde o usuario queira estar vai ser um controlador diferente
        public function initRoutes(){

            $routes['home'] = array(
                //define um indice que leva ao indexControleer

                //rota para onde a requisicao deve seguir
                'route' => '/',
                //controlador que executara a acao
                'controller' => 'indexController',
                //acao dentro do controller que sera executada
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobre_nos'
            );

            $this->setRoutes($routes);

        }

        public function run($url){
             
        }

        public function getUrl(){
            //pega a url do usuario que o usuario esta      //deixa apenas da onde o usuario esta ascessando a requisicao
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
        }
    }
?>