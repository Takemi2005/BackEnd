<?php
namespace Aula_14;


require_once 'CRUD.php';
require_once 'ProdutosDAO.php';



// Crie 8 objetos: Tomate, maça, queijo brie, iogurte grego, Guaraná Jesus, Bolacha Bono, Desinfetante Urca e Prestobarba Bic. 
// Determine os preços por conta e os códigos de forma aleatória.

$dao = new ProdutosDAO(); 

//CREATE
$dao->salvar(new Produto(1, "Tomate", "10.00"));
$dao->salvar(new Produto(2, "Maça", "18.00"));
$dao->salvar(new Produto(3, "Queijo Brie", "50.00"));
$dao->salvar(new Produto(4, "Iogurte Grego", "15.00"));
$dao->salvar(new Produto(5, "Guaraná Jesus", "8.00"));
$dao->salvar(new Produto(6, "Bolacha Bono", "5.00"));
$dao->salvar(new Produto(7, "Desinfetante Urca", "12.00"));
$dao->salvar(new Produto(8, "Prestobarba Bic", "20.00"));


//READ
echo "\nListagem inicial:\n";
foreach ($dao->listar() as $alun){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}

//UPDATE
//  UPDATE Modifique o Desinfetante Urca para (Desinfetante Barbarex); 
// E ao menos 2 valores dos preços que voce determinou.
$dao->atualizar(7, "Desinfetante Barbarex", "05.00");
$dao->atualizar(8, "Prestobarba Bic", "08.00");

 
echo "\nApós Atualização:\n";
foreach ($dao->listar() as $alun){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}


//DELETE
// DELETE Apague a maça e o Tomate dos produtos (aqui nao somos saudaveis).
$dao->excluir(1);
echo "\nApós Exclusão:\n";
foreach ($dao->listar() as $alun){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}
$dao->excluir(7);
echo "\nApós Exclusão:\n";
foreach ($dao->listar() as $alun){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}

$dao->excluir(4);
echo "\nApós Exclusão:\n";
foreach ($dao->listar() as $alun){
    echo "{$aluno->getid()} - {$aluno->getnome()} - {$aluno->getcurso()}\n";
}