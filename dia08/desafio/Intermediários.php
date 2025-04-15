<?php 
$alunos = [
    ["nome" => "Pedrinho", "Notas" => [5, 6]],
    ["nome" => "Gustavin", "Notas" => [7, 8]]
];

foreach ($alunos as $aluno) {
    echo "<p>Nome: " . $aluno["nome"] . "</p>";
    $notas = $aluno["Notas"];
    $total = 0;    
    echo "<p>Notas:</p>";
    foreach ($notas as $nota) {
        echo "<p>$nota</p>";
        $total += $nota;
    }
    $media = $total / count($notas);
    echo "<p>Valor total da nota: $total</p>";
    echo "<p>Valor da média: $media</p>";
    echo "<hr>";
    print ($media>=6)?"Aprovado":"Reprovado";
}
?>
