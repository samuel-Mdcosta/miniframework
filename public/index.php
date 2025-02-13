<?php 
    require_once "../vendor/autoload.php";

    $rota = new \app\Rota;
    echo 'teste';
    echo '<hr>';

    //printa a url que o usuario esta acessando
    print_r($rota->getUrl());

    echo '<hr>';
    echo '<pre>';
    //puxar a variavel que rescebe o arquivo do controller
    print_r($rota->getRoutes());
    echo '</pre>';