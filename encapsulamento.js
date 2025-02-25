// criando a classe aluno 
class Aluno{
    #nota
    constructor(nome, idade, nota) {
        // o constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
        estudar = () => console.log(`${this.nome} esta estudando.`);
        verNota = () => this.#nota
        tudo = () => console.log(`O aluno se chama ${this.nome} e tem ${this.idade} anos , e sua nota na prova foi ${this.#nota}`);
}

// novo objeto
const yasmin = new Aluno("yasmin", 17, 10)
console.log(yasmin.nome)
console.log(yasmin.verNota())

// objeto "nome" "idade" e "nota"
const rafa = new Aluno("rafa", 13, 9)
rafa.tudo();