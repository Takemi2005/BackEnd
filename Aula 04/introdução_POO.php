<?php
// Modelagem de dados sem utilização de POO (programação orientada a objetos)

$marca_carro1 = "honda";
$modelo_carro1 = "Civic";
$ano_carro1 = 2026;
$revisao_carro1 = true;
$Ndonos_carro1 = 2;

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = 2012;
$revisao_carro2 = false;
$Ndonos_carro2 = 3;

$marca_carro3 = "Fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = 2005;
$revisao_carro3 = false;
$Ndonos_carro1 = 1;

$marca_carro4 = "Volkswagen";
$modelo_carro4 = "Jetta";
$ano_carro4 = 2020;
$revisao_carro4 = true;
$Ndonos_carro4 = 7;

function revisaoFeita($rev){
    $rev=true;
    return $rev;
}

$revisao_carro3 = revisaoFeita($revisao_carro3); // Resultando true

function novoDono($qtde_donos){
    return $qtde_donos + 1;
}

$Ndonos_carro4 = novoDono(qtde_donos: $Ndonos_carro4,); 



?>