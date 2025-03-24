<?php
class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
     $this->nome = $nome;
     $this->idade = $idade;
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome} e tenho {$this->idade}";
    }
}

//a classe aluno vai herdar de pessoas 
class Aluno extends Pessoa{
    public function estudar(){
        echo "{$this->nome} esta estudando";
    }
}

// a classe professor herda de pessas
class Professor extends Pessoa{
    public function ensinar(){
        echo "Professor {$this->nome} esta ensinado";
    }
}

//criando objetos
$julia = new Aluno ("julia", 17);
$guilherme = new Professor ("guilherme", 30);

$julia ->apresentar();
$julia ->estudar();
$guilherme ->apresentar();
$guilherme ->ensinar();

?>