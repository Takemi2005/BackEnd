<?php
    // Modificadores de acesso: 
    // public, private, protected
    // Public NomeDoAtributo: métodos e atributos públicos

    // Private NomeDoAtributo: métodos e atributos privados para acesso somente detro da classe. Utilizamos os getters e setters para acessa-los.

    // Protected NomeDoAtributo: métodos e atributos protegidos para acesso somente dentro da classe e suas classes filhas.

    // Pacotes (packages):sintaxe logo no inicio do codigo, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido.
    // Exemplo: namespace Aula 09;

    // Caso tenham mais arquivos que formam o BackEnd de um pagina WEB e possuem a mesma raiz, o namespace será o mesmo.

    namespace Aula_09;

    // Interfaces: É um recurso no qual garante que obrigatoriamente a classe tenha que construir algum método previamente determinado. 
    // Funciona como uma promessa ou contrato. Exemplo: Configuramos uma interface "Pagamento" que faz com que qualquer classe que a implemente,
    // tenha que obrigatoriamente construir o método "pagar".

    interface Pagamento { // Interface de contrato de pagamento
        public function pagar($valor); // Determinando o método que terá que ser criado 
    }

    class CartaoCredito implements Pagamento { // Criando classe com o cartão de credito com implementação da interface Pagamento
        public function pagar($valor) { // Criando o método obrigatório "pagar"
            echo "Pagando realizado com o cartão de crédito, valor: $valor\n";
        }
    }


    class PIX implements Pagamento { // Criando classe com o PIX com implementação da interface
        public function pagar($valor) { // Criando o método obrigatório "pagar"   
            echo "Pagamento realizado via PIX, valor: $valor\n";
        }
    }

    class dinheiroEspecie implements Pagamento { // Criando classe com o dinheiro em espécie com implementação da interface
        public function pagar($valor) { // Criando o método obrigatório "pagar"  
            $valor *= 0.90; 
            echo "Pagamento realizado em dinheiro em espécie, valor: $valor\n";
        }
    }

    $cred = new CartaoCredito(); // Criando o objeto
    $cred -> pagar(250);


    $PIX = new PIX(); 
    $PIX -> pagar(65);

    $dinheiro = new dinheiroEspecie(); 
    $dinheiro-> pagar(320);



// Exemplo 2 de interface
interface Forma {
    public function calcularArea();
}

class Quadrado implements Forma {
    public function calcularArea() {
        return 1 * 1;
    }
}

class Circulo implements Forma {
    public function calcularArea() {
        $raio = 1;
        $pi = 3.14159;
        return $pi * ($raio * $raio);
    }
}

$quadrado = new Quadrado();
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";

$circulo = new Circulo();
echo "Área do círculo: " . $circulo->calcularArea() . "\n";


// Crie a classe pentagono, e calcule a área do mesmo
class Pentagono implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        $area = (5 * $this->lado * $this->lado) / (4 * tan(pi() / 5));
        return $area;
    }
}

echo "Digite o valor do lado do pentágono: ";
$lado = trim(fgets(STDIN));
$pentagono = new Pentagono($lado);
echo "Área do pentágono: " . $pentagono->calcularArea() . "\n";

// Crie a classe hexagono, e calcule a área do mesmo
class Hexagono implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        // Área do hexágono regular: (3 * sqrt(3) * lado^2) / 2
        return (3 * sqrt(3) * pow($this->lado, 2)) / 2;
    }
}

echo "Digite o valor do lado do hexágono: ";
$ladoHex = trim(fgets(STDIN));
$hexagono = new Hexagono($ladoHex);
echo "Área do hexágono: " . $hexagono->calcularArea() . "\n";

?>
