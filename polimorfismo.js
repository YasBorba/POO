class Pessoa{
    constructor(nome) {
        // o constructor é um metodo tradicional
        this.nome = nome;
    }
    //metodo
    apresentar = () => console.log(`Olá, sou ${this.nome}`);
}

class Aluno extends Pessoa{
    apresentar = () => console.log(`Olá, sou ${this.nome} e eu sou um aluno`);
}

class Professor extends Pessoa{
    apresentar = () => console.log(`Olá, sou ${this.nome} e eu sou o professor`);
}

const yasmin = new Aluno("yasmin")

const luis = new Professor("luis")

luis.apresentar();
yasmin.apresentar();
