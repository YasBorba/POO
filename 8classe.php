<?php

class Aluno{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function estudar(){
        echo "{$this->nome} esta estudando";
    }
}

//criando objetos

$yasmin = new Aluno ("yasmin", 17);
$laura = new Aluno ("laura", 17);

echo $yasmin->nome;
$laura->estudar();

?>