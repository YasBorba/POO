class Pessoa{
    constructor(nome) {
        if(this.constructor === Pessoa){
            throw newError("não pode criar esse objeto")
        }
        this.nome = nome;
    }
}

class Aluno extends Pessoa{
    
}

const yasmin = new Aluno("yasmin")
console.log(yasmin.nome)