<?php

    // cria a classe Core
    class Core{
        
        // cria a função run
        public function run(){
            // o explode irá pegar na url tudo depois de index.php e o PHP_SELF retorna o script atual sendo executado
            $url = explode("index.php", $_SERVER['PHP_SELF']);
            $url = end($url); // end define o ponteiro para o último elemento
            
            $params = array(); // atribui um array vazio à $params
            
            // verifica se a $url não está vazia
            if(!empty($url)){
                $url = explode("/", $url); // o explode irá pegar na url tudo depois de / (barra)
                array_shift($url); // remove o primeiro elemento da $url
                
                // atribui o primeiro valor da url, que seria o nome do controller, à currentController
                $currentController = $url[0] . "Controller"; 
                array_shift($url); // remove o primeiro elemento da $url
                
                // verifica se na posição 0 da $url não está vazia
                if(isset($url[0])){
                    $currentAction = $url[0]; // atribui o que estiver na posição 0 da $url à $currentAction
                    array_shift($url); // remove o primeiro elemento da $url
                }else{
                    $currentAction = "index"; // atribui "index" à $currentAction
                }
                
                // verifica se os itens na $url são maiores que 0
                if(count($url) > 0){
                    $params = $url; // atribui o que contém na $url à $params
                }
            }else{
                $currentController = "HomeController"; // atribui "HomeController" à $currentController
                $currentAction = "index"; // atribui "index" à $currentAction
            }
            
            require_once 'core/Controller.php'; // chama o Controller.php da pasta core
            
            // cria uma instância da classe HomeController que foi armazenada como string na $currentController
            $c = new $currentController();
            
            // chama um callback com um array de parâmetros
            call_user_func_array(array($c, $currentAction), $params);
            
        }
        
    }

?>