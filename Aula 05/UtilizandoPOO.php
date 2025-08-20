<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
    }
}

$carro1 = new Carro("Porsche", "911", 2020, false, 3);
$carro2 = new Carro("mitsubishi", "Lancer", 1945, true, 1);

// Criando mais dois objetos para testar
$carro3 = new Carro("Honda", "HR-V", 2024, true, 2);
$carro4 = new Carro("Nissan","kics",  2025, true, 1);
$carro5 = new Carro("Fiat", "Mobi", 2021, false, 1);
$carro6 = new Carro("Ford", "Mustang", 2019, true, 1);

