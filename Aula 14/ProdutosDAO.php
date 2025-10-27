<?PHP 
namespace Aula_14;


class ProdutosDAO {
    private $produtos = [];
    private $arquivo = "produtos.json";

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $codigo => $info) {
                    $this->produtos[$codigo] = new Produto(
                        $info['codigo'],
                        $info['nome'],
                        $info['preco']
                    );
                }
            }
        }
    }

    public function salvar(Produto $produto) {
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarArquivo();
    }

    public function listar() {
        return $this->produtos;
    }

    public function atualizar($codigo, $novoNome, $novoPreco) {
        if (isset($this->produtos[$codigo])) {
            $this->produtos[$codigo]->setNome($novoNome);
            $this->produtos[$codigo]->setPreco($novoPreco);
            $this->salvarArquivo();
        }
    }

    public function excluir($codigo) {
        unset($this->produtos[$codigo]);
        $this->salvarArquivo();
    }

    private function salvarArquivo() {
        $dados = [];
        foreach ($this->produtos as $produto) {
            $dados[$produto->getCodigo()] = [
                'codigo' => $produto->getCodigo(),
                'nome' => $produto->getNome(),
                'preco' => $produto->getPreco()
            ];
        }
        file_put_contents($this->arquivo, json_encode($dados,JSON_PRETTY_PRINT));
    }
}