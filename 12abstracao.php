<?php
abstract class Pessoa{
    public $nome;
    public function __construct($nome)
    {
     $this->nome = $nome;
    }
}
class Aluno extends Pessoa{
}

$kayque = new Aluno ("kayque");
echo $kayque ->nome . "É ele";

?>