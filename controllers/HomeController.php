<?php

    class HomeController extends Controller{
        
        public function __construct(){
        }
        
        public function index(){
            
        
            
            $usuarioDao = new UsuarioDAO();
            
            $usuario = $usuarioDao->list();
            
            $this->loadTemplate('home', ['dados' => $usuario]);
        }
        
        public function cadastrarUsuario(){
            $this->loadTemplate('cadastrarUsuario');
        }
        
    }

?>