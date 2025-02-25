// criando a classe aluno 
class Aluno{
    constructor(nome, idade) {
        // o constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
    }
        estudar = () => console.log(`${this.nome} esta estudando.`);
}

// novo objeto
const yasmin = new Aluno("yasmin", 17)
console.log(yasmin.nome)