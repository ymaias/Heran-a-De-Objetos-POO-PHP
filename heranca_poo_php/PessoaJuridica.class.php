<?php
    include 'Cliente.class.php';
    
    class PessoaJuridica extends Cliente {
        var $cnpj;

        function __construct($nome, $telefone, $endereco, $cnpj) {
            parent::__construct($nome, $telefone, $endereco, $cnpj);
            $this->cnpj = $cnpj;
        }

        function boleto(){

        }
    }
?>