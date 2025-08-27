<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;


//Construtor para a classe Pessoa.
    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->setnome($nome);
        $this->setcpf($cpf);
        $this->settelefone($telefone);
        $this->setIdade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }

    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
       
    }
    public function getNome() {
        return $this->nome;
    }

//Getter e Setter para $cpf. 
//pre_replace = altera estrutura string. 
//pattern: /\D/ = qualquer caractere que não seja digito. 

    public function setCpf($cpf) {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    public function getCpf() {
        return $this->cpf;
    }

//Getter e Setter para $telefone.
public function setTelefone($telefone) {
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }
    public function getTelefone() {
        return $this->telefone;
    }
//Getter e Setter para $idade.
public function setIdade($idade) {//Seter idade
        $this->idade = abs((int)$idade);
    }
    public function getIdade() {
        return $this->idade;
    }

    public function exibirinfo() {
        return " Nome do aluno:". $this->nome."\n CPF:"$this->cpf.
        "\n Telefone:". $this->telefone()\n Idade: $this->getIdade()
        \n Email:
    }

}

//Classe Pessoa.
$aluno1 = new Pessoa("LuiZa TaKemi" ,"123.456.789-00", "(11) 91234-5678", 20, 
"teste@teste.com", "123456");

echo $aluno1->getNome();






 