<?php

$nota = 8.5;
$nota2 = 6.0;
$media = ($nota + $nota2) / 2;

if ($media >= 7) {
    echo "Aluno aprovado com média: $media";
} else {
    echo "Aluno reprovado com média: $media";
}
?>  


<?php
// Implemente tambem uma condição que verifique a presença do aluno.O aluno será aprovado somente se a média for maior ou igual a 7 e a presença for maior que 75%.
$presenca = 80; // exemplo de presença em porcentagem

if ($media >= 7 && $presenca > 75) {
    echo "Aluno aprovado com média: $media e presença: $presenca%";
} else {
    echo "Aluno reprovado. Média: $media, Presença: $presenca%";
}
?> 

<?php
// Caso o aluno tenha o nome "Enzo Enrico", ele será aprovado independente da média e presença.Crie uma variavel $nome

$nome = "Enzo Enrico";
if ($nome === "Enzo Enrico") {
    echo "Aprovado independente da média e presença.";
} elseif ($media >= 7 && $presenca >= 75) {
    echo "Aprovado com média: $media e presença: $presenca%";
} else {
    echo "Reprovado com média: $media e presença: $presenca%";
} 

$nome = "Enzo Erinco";
$nome1 = 2;
$nome1 = 4;
$presenca = 20;
$media = ($nota1 + $nota2) / 2;

if (($media >= 7 && $presenca >= 75) || $nome == "Enzo Enrico") {
    echo "Aprovado com média: $media e presença: $presenca%";
} else {
    echo "Reprovado com média: $media e presença: $presenca%";
}
