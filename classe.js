// criando a classe aluno 
class Aluno{
    constructor(nome, idade) {
        // o constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
    }
        estudar = () => console.log(`${this.nome} esta estudando.`);
        feliz = () => console.log(`ola meu nome é ${this.nome} tenho ${this.idade} anos e estou feliz`);
}

// novo objeto
const yasmin = new Aluno("yasmin", 17)
console.log(yasmin.nome)

// novo objeto "esta estudando"
const laura = new Aluno("laura", 17)
console.log(laura.nome);
laura.estudar();

// novo objeto "nome" e "idade"
const gustavo = new Aluno("gustavo", 17)
console.log(gustavo.nome);
console.log(gustavo.idade);

// novo objeto "nome" "idade" e "feliz"
const rafa = new Aluno("rafa", 13)
console.log(rafa.nome);
console.log(rafa.idade);
rafa.feliz();

