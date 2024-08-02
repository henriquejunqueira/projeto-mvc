<?php

    class Usuario extends Model{
        
        private $nome;
        private $dataNascimento;
        private $telefone;
        private $endereco;
        private $cidade;
        private $uf;
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        
        public function getEndereco(){
            return $this->endereco;
        }
        
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        
        public function getCidade(){
            return $this->cidade;
        }
        
        public function setUf($uf){
            $this->uf = $uf;
        }
        
        public function getUf(){
            return $this->uf;
        }
        
    }

?>