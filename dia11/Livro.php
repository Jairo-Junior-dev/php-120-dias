<?php
class Livro {
    private int $id;
    private string $titulo;
    private int $quantidade;
    private string $descricao;

    public function __construct(int $id, string $titulo, int $quantidade, string $descricao) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
    }
    
    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    // Getter e Setter para Título
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    // Getter e Setter para Quantidade
    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void {
        $this->quantidade = $quantidade;
    }

    // Getter e Setter para Descrição
    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }
}
?>
