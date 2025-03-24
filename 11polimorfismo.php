<?php

class Pessoa{
    public $nome;
    public function __construct($nome)
    {
     $this->nome = $nome;
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome}";
    }
}
// a classe aluno herda de pessoa e sobreescreve o metodo apresentar

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Oi! Meu nome é {$this->nome} e sou aluno";
    }
}

class Professor extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou o professor {$this->nome}";
    }
}

$leo = new Aluno ("leo", 17);
$lucas = new Professor ("lucas", 30);

$leo ->apresentar();
$lucas ->apresentar();

?>