<?php

require_once "Livro.php";

class Biblioteca {
    /** @var Livro[] */
    private array $livros = [];

    public function adicionarLivro(Livro $livro): void {
        $this->livros[] = $livro;
    }

    public function listarLivros(): array {
        return $this->livros;
    }
    public function existeLivro(int $id): bool {
        foreach ($this->livros as $livro) {
            if ($livro->getId() === $id) {
                return true;
            }
        }
        return false;
    }
    
    public function buscarPorTitulo(string $titulo): ?Livro {
        foreach ($this->livros as $livro) {
            if (strtolower($livro->getTitulo()) === strtolower($titulo)) {
                return $livro;
            }
        }
        return null;
    }

    public function editarLivro(int $id, string $titulo, int $quantidade, string $descricao): bool {
        foreach ($this->livros as $livro) {
            if ($livro->getId() === $id) {
                $livro->setTitulo($titulo);
                $livro->setQuantidade($quantidade);
                $livro->setDescricao($descricao);
                return true;
            }
        }
        return false;
    }

    public function excluirLivro(int $id): bool {
        foreach ($this->livros as $index => $livro) {
            if ($livro->getId() === $id) {
                unset($this->livros[$index]);
                $this->livros = array_values($this->livros);
                return true;
            }
        }
        return false;
    }
    public function buscarPorId(int $id): ?Livro {
        foreach ($this->livros as $livro) {
            if ($livro->getId() === $id) {
                return $livro;
            }
        }
        return null;
    }
    public function atualizarLivro(Livro $livro): void {
        foreach ($this->livros as $key => $livroExistente) {
            if ($livroExistente->getId() === $livro->getId()) {
                $this->livros[$key] = $livro;
                return;
            }
        }
    }
        
}

?>
