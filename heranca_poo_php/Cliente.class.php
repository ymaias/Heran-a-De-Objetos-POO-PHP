<?php
    class Cliente {
        var $nome;
        var $telefone;
        var $endereco;

        public function __construct($nome, $telefone, $endereco){
            $this -> $nome = $nome;
            $this -> $telefone = $telefone;
            $this -> $endereco = $endereco;
        }

        function depositar(){

        }

        function sacar(){

        }

        function transferir(){
            
        }
    }
?>