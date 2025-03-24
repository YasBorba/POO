<?php
class Pessoa{
    public $nome;
    public $idade;

    private $nota;

    public function __construct($nome, $idade, $nota)
    {
     $this->nome = $nome;
     $this->idade = $idade;
     $this->nota = $nota;

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

class Diretora extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou a diretora {$this->nome}";
    }
}

class Funcionario extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou um funcionario do sesi e me chamo {$this->nome}";
    }
}

$edvania = new Diretora ("edvania", 50, 10);

$luzia = new Funcionario ("luzia", 53, 10);
$jean = new Funcionario ("jean", 27, 10);

$julia = new Aluno ("julia", 17, 10);
$guilherme = new Professor ("guilherme", 30, 10);

$leo = new Aluno ("leo", 17, 10);
$lucas = new Professor ("lucas", 30, 10);

$laura = new Aluno ("julia", 17, 10);
$renata = new Professor ("guilherme", 47, 10);

$julia ->apresentar();
$guilherme ->apresentar();
$leo ->apresentar();
$lucas ->apresentar();
$laura ->apresentar();
$renata ->apresentar();
$edvania ->apresentar();
$luzia ->apresentar();
$jean ->apresentar();


?>