<?php
$aluno = [
    "nome" => "Pedro",
    "idade" => 15,

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} esta estudando";
    }
];

?>