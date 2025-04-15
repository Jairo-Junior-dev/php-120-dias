<?php  
$array = [["id"=>1, "nome"=>"Veja", "preço"=>2.50, "estoque"=>13]];

function add($id, $nome, $preco, $estoque): void {
    global $array;
    $array[] = [
        "id" => $id,
        "nome" => $nome,
        "preço" => $preco,
        "estoque" => $estoque
    ];
}

function buscarPeloId($value): ?array {
    global $array;
    foreach ($array as $item) {
        if ($item["id"] === $value) {
            return $item ?? null;
        }
    }
    return null; 
}
// Busca todos os produtos com estoque maior que 0
function buscarTodosOsProdutosEmEstoque(): array {
    global $array;
    $resultado = [];
    foreach ($array as $item) {
        if ($item["estoque"] > 0) {
            $resultado[] = $item;
        }
    }
    return $resultado;
}

function removerProdutoPeloId($id): bool {
    global $array;
    foreach ($array as $index => $item) {
        if ($item["id"] === $id) {
            unset($array[$index]);
            $array = array_values($array);
            return true;
        }
    }
    return false; 
}

add(2, "Sabonete", 3.50, 25);
add(3, "Shampoo", 7.99, 0);
add(4, "Condicionador", 8.99, 12);


echo "Todos os produtos:<br>";
var_dump($array);

echo "<br>Produtos em estoque:<br>";
var_dump(buscarTodosOsProdutosEmEstoque());

echo "<br>Removendo produto com ID 2:<br>";
removerProdutoPeloId(2);
var_dump($array);
?>