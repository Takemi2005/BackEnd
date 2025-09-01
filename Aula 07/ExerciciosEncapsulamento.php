<?php
// 1. Carro com atributos privados
class Carro {
    private string $marca;
    private string $modelo;

    public function __construct(string $marca = "", string $modelo = "") {
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }
    public function setMarca(string $marca) {
        $this->marca = $marca;
    }
    public function getMarca(): string {
        return $this->marca;
    }
    public function setModelo(string $modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo(): string {
        return $this->modelo;
    }
}
$carro = new Carro();
$carro->setMarca("ford");
$carro->setModelo("Ka");
echo "Carro: " . $carro->getMarca() . " " . $carro->getModelo() . "\n";



// 2. Pessoa com atributos
class Pessoa {
    private  $nome;
    private $idade;
    private$email;

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setIdade(int $idade) {
        $this->idade = ($idade >= 0) ? $idade : 0;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setEmail(string $email) {
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : "\n";
    }

    public function getEmail(): string {
        return $this->email;
    }
}
// Teste Pessoa
$pessoa = new Pessoa();
$pessoa->setNome("Luiza");
$pessoa->setIdade(20);
$pessoa->setEmail("lu123@gmail.com");
echo "O nome é " . $pessoa->getNome() . ", tem " . $pessoa->getIdade() . " anos e o email é " . $pessoa->getEmail() . "\n";


// 3. Validação em setter
class Aluno {
    private  $nome;
    private  $nota;

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNota(float $nota) {
        $this->nota = ($nota >= 0 && $nota <= 10) ? $nota : 0;
    }

    public function getNota(): float {
        return $this->nota;
    }
}
// Teste Aluno
$aluno1 = new Aluno();
$aluno1->setNome("Beatriz");
$aluno1->setNota(8.5);

$aluno2 = new Aluno();
$aluno2->setNome("Luiza");
$aluno2->setNota(0); // inválido

echo "Aluno: " . $aluno1->getNome() . ", Nota: " . $aluno1->getNota() . "\n";
echo "Aluno: " . $aluno2->getNome() . ", Nota: " . $aluno2->getNota() . "\n";


// 4. Encapsulamento de Produto
class Produto {
    private  $nome;
    private  $preco;
    private $estoque;

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setPreco(float $preco) {
        $this->preco = $preco;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setEstoque(int $estoque) {
        $this->estoque = $estoque;
    }

    public function getEstoque(): int {
        return $this->estoque;
    }
}

// Teste Produto
$produto = new Produto();
$produto->setNome("Notebook");
$produto->setPreco(3500.00);
$produto->setEstoque(15);

echo "O produto " . $produto->getNome() . " custa R$ " . number_format($produto->getPreco(), 2, ',', '.') . " e possui " . $produto->getEstoque() . " unidades em estoque.";


// 5. Alteração de dados
class Funcionario {
    private  $nome;
    private  $salario;

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setSalario(float $salario) {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }
}
// Teste Funcionario
$funcionario = new Funcionario();
$funcionario->setNome("Carlos");
$funcionario->setSalario(2500.00);

echo "Funcionário: " . $funcionario->getNome() . ", Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setNome("Ana");
$funcionario->setSalario(3200.00);

echo "Funcionário: " . $funcionario->getNome() . ", Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
?>
