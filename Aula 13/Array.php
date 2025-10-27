<?php

// Diferentemente dos arrays convencionais que associam os valores armazenados no array a um indice,
// nos arrays associativos os valores são associados a uma chaves, aonde as chaves assumem o papel do indice do arrray.

// $alunos["nome"] = "Gabrielson";

// Neste exemplo, o valor "Gabrielson" está associado á chave "nome".

// Isso é feito para melhorar o entendimento do código e na execução e manipulação do array. 
// Caso fossemos trabalhar com um array convencional, teriamos que lembar qual o índice que iria corresponder a chave "nome".

// Formato do arquivo JSON

$dao -> criarAluno (new Aluno(1, "João", "Dev"));
$dao -> criarAluno (new Aluno(2, "Maria", "Mecânica"));

// JSON de $alunos[];

// [{ "id": 1,
// "nome": "João",
// "curso": "Dev"
// },
// { "id": 2,
// "nome": "Maria",
// "curso": "Mecânica"
// }
// ];