<?php

    class Pessoa {

        private $nome;
        public $idade;

        function __construct($idade) {
            $this -> idade = $idade;
        }

        function get_nome() {
            return $this -> nome;
        }

        function falar($i) {
            echo $this -> idade . "falando...   ";
        }

        function trocarNome() {
            if($this -> idade >= 18) {
                echo("É possível trocar nome");
            } else {
                echo("Não é possível trocar nome");
            }
        }
    }

?>