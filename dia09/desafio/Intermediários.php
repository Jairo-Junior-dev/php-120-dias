<?php

function formatarNome($texto) {
    return ucwords(mb_strtolower($texto, "UTF-8"));
}

echo formatarNome("jAiRo pinHEIRO da conCEIÇÃO");

$frase = "Eu amo estudar PHP!";
echo str_replace("PHP", "Java", $frase);

$lista = "maçã,banana,laranja";
$frutas = explode(",", $lista);

foreach ($frutas as $fruta) {
    echo "- " . trim($fruta) . PHP_EOL;
}


?>