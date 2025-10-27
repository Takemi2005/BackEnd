<?php
namespace Aula_12;
class AlunoDAO { // Classe DAO(Data Access Object) para manipulação das funçoes do CRUD (creat, read, update e delete)
    private $alunos = []; // Array $aluno para armazena temporario dos objetos a serem manipulados 
    // antes de ser enviado ao banco de dados. foi criado vazio inicialmente.

    private $arquivo = "alunos.json"; // Cria o arquivo JSON para que os dados sejam armazenados

    // Construtor AlunoDAO --> carrega os dados do arquivo JSON ao niciar a aplicação

    public function __construct(){
        if (file_exists($this->arquivo)){
            // Lê o conteudo do arquivo caso ele já exista 
            $conteudo = file_get_contents($this->arquivo);
            // Atribui as informaçoes do arquivo existente á variavel $conteudo

            $dados = json_decode($conteudo, true); // Decodifica o conteudo JSON para um array associativo
           
            if ($dados){ // Verifica se o array é nullo ou falso, caso seja valido e contenha conteúdo,
            //  ele prossegue para a logica dentro da IF
                foreach ($dados as $id => $info){ // Percorre o array $dados relacionando chave e valor
                    $this->alunos[$id] = new Aluno( // Cria um novo objeto já com as chaves e os valores associados
                        $info['id'],
                        $info['nome'],
                        $info['curso']
                    );
                }
            }
        }
    }

   // Metodo auxiliar --> para salvar o array $aluno no arquivo JSON
   private function salvaremArquivo(){
       $dados = [];

   // Transforma os objetos do array em convencionais
   foreach ($this->alunos as $id => $aluno){
       $dados[$id]=[
           'id'=>$aluno->getid(),
           'nome'=>$aluno->getnome(),
           'curso'=>$aluno->getcurso()
       ];
      }
       file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
     }




     
    // Create 
    public function criarAlunos(Aluno $aluno) { // metodos para cria um objeto no array alunos // Create 
        $this->alunos[$aluno->getid()] = $aluno;
        $this->salvaremArquivo(); 
    }
    
      // Read
    public function lerAlunos() { // metodo para ler os dados de um objeto já foi criado 
        return $this->alunos;
    }

    // Update
    public function atualizarAlunos($id, $novoNome, $novoCurso) { // metodo para atualizar os dados de um objeto já foi criado 
        if(isset($this->alunos[$id])){
            $this->alunos[$id] ->setNome($novoNome);
            $this->alunos[$id] ->setCurso($novoCurso);
        }
            $this->salvaremArquivo();
        
    }

    // delete
    public function excluirAlunos($id) { // metodos para excluir um objeto 
        unset($this->alunos[$id]);
         $this->salvaremArquivo(); 
    }
}
    