<?php
namespace Aula_12;
require_once 'CRUD.php';
require_once 'AlunoDAO.php';

$dao = new AlunoDAO(); // objeto da classe Aluno DAO para testar metodos CRUD

//CREATE

// Crie mais 6 objetos:
// Id - nome - curso 
// 4 - Aurora - Arquitetura
// 5 - Oliver - Gestão
// 6 - Amanda - Luta
// 7 - Geysa - Engenharia
// 8 - Joab - Eletrica
// 9 - Miguel - Streamer  

$dao->criarAlunos(new Aluno(1, "Josias", "Panificação"));
$dao->criarAlunos(new Aluno(2, "Victor Hugo", "Manicure"));
$dao->criarAlunos(new Aluno(3, "Beatriz", "Eletricista"));
$dao->criarAlunos(new Aluno(4, "Aurora",  "Arquitetura"));
$dao->criarAlunos(new Aluno(5, "Oliver",  "Gestão"));
$dao->criarAlunos(new Aluno(6, "Amanda",  "Luta"));
$dao->criarAlunos(new Aluno(7, "Geysa",  "Engenharia"));
$dao->criarAlunos(new Aluno(8, "Joab",  "Eletrica"));
$dao->criarAlunos(new Aluno(9, "Miguel",  "Streamer"));


//READ
echo "\nListagem inicial:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}

//UPDATE
// Faça as seguintes atualizaçoes:
// Alterar nome da Geysa para Clotilde
// - Alterar nome do Joab para Joana (operou)
// - Alterar curso do Miguel para Designer
// - Alterar curso da Amanda para Logistica
// - Alterar curso do Oliver para Eletrica 

$dao->atualizarAlunos(1, "Jozias", "Técnico em Borracharia");
$dao->atualizarAlunos(7, "Clotilde", "Engenharia");
$dao->atualizarAlunos(8, "Joana", "Eletrica");
$dao->atualizarAlunos(9, "Miguel", "Designer"); 
$dao->atualizarAlunos(6, "Amanda", "Logistica");
$dao->atualizarAlunos(5, "Oliver", "Eletrica");
 


echo "\nApós Atualização:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}
//DELETE
$dao->excluirAlunos(1);
echo "\nApós Exclusão:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}

$dao->excluirAlunos(7);
echo "\nApós Exclusão:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}

$dao->excluirAlunos(4);
echo "\nApós Exclusão:\n";
foreach ($dao->lerAlunos() as $aluno){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}