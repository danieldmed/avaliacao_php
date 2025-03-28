<?php

    include_once("Pessoa.php");

    $alunoDaniel = new Aluno ("Daniel", 20, 12345);
    $profWagner = new Professor ("Wagner", 18, 54321);
    
    echo ("Aluno Daniel: " .$alunoDaniel -> get_nome() .);  
    echo ("Professor Wagner: " .$profWagner -> get_nome() .);

    echo("$alunoDaniel -> trocarNome()");

?>