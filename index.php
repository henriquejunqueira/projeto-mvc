<?php

    require "config.php"; // carrega o arquivo config.php
    
    define("BASE_URL", "https://localhost/projeto-mvc/"); // define a BASE_URL
    
    // faz o autoload para carregar os controllers, models e core
    spl_autoload_register(function($class) {
        // verifica se o arquivo chamado contém Controller no nome
        if(strpos($class, "Controller") > -1){
            // verifica se o arquivo existe na pasta controller
            if(file_exists("controllers/" . $class . ".php")){
                require_once 'controllers/' .$class .'.php'; // chama o Controller.php
            }
        }else if(file_exists("models/" . $class . ".php")){ // verifica se o arquivo existe na pasta model
            require_once 'models/' . $class . '.php'; // chama o Model.php
        }else{
            require_once 'core/' . $class . '.php'; // chama o Core.php
        }
    });
    
    $core = new Core(); // instancia a classe Core.php
    $core->run(); // executa a classe Core.php
    
    //https://www.phptutorial.net/php-pdo

?>