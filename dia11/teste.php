<?php require_once "index.php"; ?>

<?php 
/**$prod = new Produto();
$prod->addProdutor("Caneta", 2.50, "Produto para escritórios");
$prod->addProdutor("Lápis", 1.50, "Produto para escritórios");
$prod->addProdutor("Caneca", 15.00, "Produto para café");
$prod->addProdutor("Camiseta", 59.99, "Camiseta de algodão");
$prod->addProdutor("Tênis", 249.90, "Tênis esportivo confortável");

foreach ($prod->buscarTodos() as $key => $value) {
    echo "<h1>Produto " . ($key + 1) . "</h1>";
    echo "<p><strong>Nome:</strong> " . $value['nome'] . "</p>";
    echo "<p><strong>Preço:</strong> R$ " . number_format($value['preco'], 2, ',', '.') . "</p>";
    echo "<p><strong>Descrição:</strong> " . $value['descricao'] . "</p>";
    echo "<hr>";
}*/

?>
<?php
require_once "biblioteca.php";

$biblioteca = new Biblioteca();

// Adiciona livros (somente se ainda não tiverem sido adicionados)
if (!$biblioteca->existeLivro(1)) {
    $biblioteca->adicionarLivro(new Livro(1, "1984", 3, "Um romance distópico de George Orwell."));
    $biblioteca->adicionarLivro(new Livro(2, "Dom Quixote", 2, "Clássico espanhol de Miguel de Cervantes."));
    $biblioteca->adicionarLivro(new Livro(3, "O Hobbit", 5, "A aventura fantástica de Bilbo Bolseiro."));
}

$livroEditado = null;
$resultadoBusca = null;

// Buscar por título
if (isset($_GET['busca'])) {
    $resultadoBusca = $biblioteca->buscarPorTitulo($_GET['busca']);
}

// Edição
if (isset($_GET['editar'])) {
    $livroEditado = $biblioteca->buscarPorId((int)$_GET['editar']);
}

// Exclusão
if (isset($_GET['excluir'])) {
    $biblioteca->excluirLivro((int)$_GET['excluir']);
    header("Location: teste.php");
    exit;
}

// Adição
if (isset($_POST['novo'])) {
    $novo = new Livro(
        (int)$_POST['id'],
        $_POST['titulo'],
        (int)$_POST['quantidade'],
        $_POST['descricao']
    );
    $biblioteca->adicionarLivro($novo);
    header("Location: teste.php");
    exit;
}

// Atualização
if (isset($_POST['editar'])) {
    $biblioteca->atualizarLivro(new Livro(
        (int)$_POST['id'],
        $_POST['titulo'],
        (int)$_POST['quantidade'],
        $_POST['descricao']
    ));
    header("Location: teste.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="text-center mb-4">📚 Minha Biblioteca</h1>

    <!-- Formulário de Busca -->
    <form method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="busca" class="form-control" placeholder="Buscar livro pelo título..." required>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <!-- Resultado da Busca -->
    <?php if ($resultadoBusca): ?>
        <div class="alert alert-success">
            <h4 class="alert-heading">Livro Encontrado:</h4>
            <p><strong><?= $resultadoBusca->getTitulo() ?></strong> (<?= $resultadoBusca->getQuantidade() ?> unidades)</p>
            <p><?= $resultadoBusca->getDescricao() ?></p>
        </div>
    <?php elseif (isset($_GET['busca'])): ?>
        <div class="alert alert-danger">Livro não encontrado.</div>
    <?php endif; ?>

    <!-- Formulário Adicionar/Editar -->
    <h2 class="mt-5"><?= $livroEditado ? "Editar Livro" : "Adicionar Novo Livro" ?></h2>
    <form method="post" class="row g-3 mb-4">
        <div class="col-md-2">
            <input type="number" name="id" class="form-control" placeholder="ID" required
                   value="<?= $livroEditado ? $livroEditado->getId() : '' ?>"
                   <?= $livroEditado ? 'readonly' : '' ?>>
        </div>
        <div class="col-md-3">
            <input type="text" name="titulo" class="form-control" placeholder="Título" required
                   value="<?= $livroEditado ? $livroEditado->getTitulo() : '' ?>">
        </div>
        <div class="col-md-2">
            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade" required
                   value="<?= $livroEditado ? $livroEditado->getQuantidade() : '' ?>">
        </div>
        <div class="col-md-3">
            <input type="text" name="descricao" class="form-control" placeholder="Descrição" required
                   value="<?= $livroEditado ? $livroEditado->getDescricao() : '' ?>">
        </div>
        <div class="col-md-2 d-grid">
            <button type="submit" name="<?= $livroEditado ? 'editar' : 'novo' ?>" class="btn <?= $livroEditado ? 'btn-warning' : 'btn-success' ?>">
                <?= $livroEditado ? 'Salvar Alterações' : 'Adicionar' ?>
            </button>
        </div>
    </form>

    <!-- Botão Cancelar Edição -->
    <?php if ($livroEditado): ?>
        <a href="teste.php" class="btn btn-secondary mb-4">Cancelar Edição</a>
    <?php endif; ?>

    <!-- Lista de Livros -->
    <h2 class="mt-5">Todos os Livros</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
        <?php foreach ($biblioteca->listarLivros() as $livro): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= $livro->getTitulo() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID: <?= $livro->getId() ?></h6>
                        <p class="card-text"><?= $livro->getDescricao() ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <span class="text-muted">Quantidade: <?= $livro->getQuantidade() ?></span>
                        <div>
                            <a href="?editar=<?= $livro->getId() ?>" class="btn btn-sm btn-warning me-2">Editar</a>
                            <a href="?excluir=<?= $livro->getId() ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
