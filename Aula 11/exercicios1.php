<!-- Cenário 1 – Viagem pelo Mundo
 
Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
Terra, eles poderão comer comidas típicas e nadar em rios ou praias.-->


<?php
class Turista {
    public $pais;
    public function __construct($pais) {
        $this->pais = $pais;
    }
    public function visitar(){
        echo "Visitando $this->pais\n";
    }
}
class Lugares {
    public function comer(){
        echo "Comendo comida típica\n";
    }
    public function nadar(){
        echo "Nadando em rios ou praias\n";
    }
}

// Grupo de turistas visitando Japão, Brasil e Acre
$turistas = [
    new Turista("Japão"),
    new Turista("Brasil"),
    new Turista("Acre")
];

$lugares = new Lugares();
foreach ($turistas as $i => $turista) {
    $turista->visitar();
    $lugares->comer();
    $lugares->nadar();
    echo "\n";
}
