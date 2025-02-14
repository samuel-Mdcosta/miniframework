<?php
//arquivo de script de inicializacao
    namespace MF\init;

    //nao pode ser instanciada
    abstract class bootstrap{

        //atritubuto privado so pode ser acessado por essa classe
        private $routes;

        abstract protected function initRoutes();

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

        protected function run($url){

            //retorna os array de getRoutes() e pega as variaveis que armazena a url
            foreach($this->getRoutes() as $key => $routes){
                if($url == $routes['route']){
                    //concatena a url atual ao app\\controllers/sobre_nos
                    $class = "app\\controllers\\".$routes['controller'];

                    //inicia uma nova instancia da variavel $class
                    $controller = new $class;

                    //variavel que armazena o valor da action
                    $action= $routes['action'];
                    //executa a action dentro do controller de acordo com o valor do seu action dentro do array
                    $controller->$action();
                }
            }
             
        }

        protected function getUrl(){
            //pega a url do usuario que o usuario esta      //deixa apenas da onde o usuario esta ascessando a requisicao
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }

    }