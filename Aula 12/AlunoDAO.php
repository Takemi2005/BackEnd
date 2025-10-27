<?php
namespace Aula_12;
class AlunoDAO { // Classe DAO(Data Access Object) para manipulação das funçoes do CRUD (creat, read, update e delete)
    private $alunos = []; // Array $aluno para armazena temporario dos objetos a serem manipulados 
    // antes de ser enviado ao banco de dados. foi criado vazio inicialmente.

    public function criarAlunos(Aluno $aluno) { // metodos para cria um objeto no array alunos 
    // Create
        $this->alunos[$aluno->getid()] = $aluno;
    }
    
    public function lerAlunos() { // metodo para ler os dados de um objeto já foi criado 
    // Read
        return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso) { // metodo para atualizar os dados de um objeto já foi criado 
    // Update
        if(isset($this->alunos[$id])){
            $this->alunos[$id] ->setNome($novoNome);
            $this->alunos[$id] ->setCurso($novoCurso);
        }
    }

    public function excluirAlunos($id) { // metodos para excluir um objeto 
    // delete
        unset($this->alunos[$id]);
    }
}
    