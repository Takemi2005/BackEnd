<?php

class ProdutosMercado{ //Criando classe
    // Atributos
     public $nome;
     public $categoria;
     public $fornecedor;
     public $qtde_estoque;

    // Métodos
    public function atualizarEstoque($qtde_vendida) {
        $this->qtde_estoque -= $qtde_vendida;
        return $this->qtde_estoque;
    
    }

    // Construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }
}
// Criando objetos sem construtor feito
$produto1 = new ProdutosMercado();
$produto1->nome = "Suco Tang";
$produto1->categoria = "Bebidas";
$produto1->fornecedor = "Mondelez";
$produto1->qtde_estoque = 200;

$produto2 = new ProdutosMercado();
$produto2->nome = "Energético Moster";
$produto2->categoria = "Bebidas";
$produto2->fornecedor = "Cola-Cola";
$produto2->qtde_estoque = 150;


// Criando objetos com construtor
$produto1 = new ProdutosMercado("Suco Tang", "Bebidas", "Mondelez", 200); 
$produto2 = new ProdutosMercado("Energético Moster","Bebidas", "Cola-Cola", 150);

?>