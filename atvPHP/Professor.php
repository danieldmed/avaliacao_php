<?php

    include_once("Pessoa.php");

    class Professor extends Pessoa {

        private $RM;

        function __construct($nome, $idade, $RM) {
            parent::__construct ($nome, $idade);
            $this -> RM = $RM;
        }

        function falar ($i) {
            echo $this -> get_nome() . "falando3" . $this -> idade . $this -> RM;
        }

    }

?>