<?php
class Produto {
    
    private array $produtos = [];

    public function __construct() {}

    public function addProdutor($nome, $preco, $descricao): void {
        $this->produtos[] = [
            "nome" => $nome,
            "preco" => $preco,
            "descricao" => $descricao
        ];
    }

    public function buscarTodos() {
        return $this->produtos;
    }
}
?>
