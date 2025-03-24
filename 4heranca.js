// criar classes pessoa
// com parametros nome e idade 
// criar um metodo para apresentar

//classe
class Pessoa{
    constructor(nome, idade) {
        // o constructor é um metodo tradicional
        this.nome = nome;
        this.idade = idade;
    }
    //metodo
    apresentar = () => console.log(`Olá, sou ${this.nome} e tenho ${this.idade} anos.`);
}


//herdou as infos da classe pessoa
class Aluno extends Pessoa{
    estudar = () => console.log(`${this.nome} esta estudando`)

}

class Professor extends Pessoa{
    ensinar = () => console.log(` Professor ${this.nome} esta ensinando`)

}

//nova pessoa
const yasmin = new Aluno("yasmin", 17)

const luis = new Professor("luis", 40)

const laura = new Aluno("laura", 17)

const lucas = new Professor("lucas", 33)

luis.apresentar();
yasmin.apresentar();

luis.ensinar();
yasmin.estudar();

lucas.apresentar();
laura.apresentar();

lucas.ensinar();
laura.estudar();

