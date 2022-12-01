<?php
    include 'Cliente.class.php';
    
    class PessoaFisica extends Cliente {
        var $cpf;

        function __construct($nome, $telefone, $endereco, $cpf) {
            parent::__construct($nome, $telefone, $endereco, $cpf);
            $this->cpf = $cpf;
        }

        function pix(){

        }
    }
?>