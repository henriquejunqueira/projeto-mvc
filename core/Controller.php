<?php

    // cria a classe controller
    class Controller{
        
        // cria a função que carrega a view
        public function loadView($viewName, $viewData = array()){
            extract($viewData); // importa variáveis através de um array
            $viewData = [$dados];
            include 'views/' . $viewName . '.php'; // inclue a view na página
        }
        
        // cria a função que carrega o template
        public function loadTemplate($viewName, $viewData = array()){
            include 'views/template.php'; // inclue a view template.php na página
        }
        
        // cria a função que carrega a view no template
        public function loadViewInTemplate($viewName, $viewData = array()){
            extract($viewData); // importa variáveis através de um array
            include 'views/' . $viewName . '.php'; // inclue a view na página
        }
        
    }

?>