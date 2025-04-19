<?php
$nome = "Jairo Pinheiro Da Conceição Junior";


echo "Total de caracteres: " . mb_strlen($nome, "UTF-8") . PHP_EOL;


echo "Maiúsculo: " . mb_strtoupper($nome, "UTF-8") . PHP_EOL;


$primeiro_nome = substr($nome, 0, strpos($nome, " "));
echo "Primeiro nome: " . $primeiro_nome . PHP_EOL;
?>
