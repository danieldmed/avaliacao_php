<?php

    include_once("Pessoa.php");
    
    class Aluno extends Pessoa {

        private $RA;

        function __construct($nome, $idade, $RA) {
            parent::__construct ($nome, $idade);
            $this -> RA = $RA;
        }

        function falar ($i) {
            echo $this -> get_nome() . "falando2" . $this -> idade . $this -> RA;   
        }

    }

?>