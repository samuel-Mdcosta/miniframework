<?php
    //especificacao espera que o script tenha o mesmo namespace do diretorio
    namespace app;

    use MF\init\bootstrap;

    class Rota extends bootstrap{
        
        //inicia uma rota, dependendo da onde o usuario queira estar vai ser um controlador diferente
        protected  function initRoutes(){

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
    }
?>