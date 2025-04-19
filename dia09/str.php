<?php
//Uso do strlen
$texto = "   Olá Mundo   ";
var_dump(strlen($texto));

$texto = trim($texto);

var_dump(strlen($texto));
echo $texto."<br>"; 

$texto = strtolower($texto);
echo $texto."<br>";

$tex = strtoupper($texto);
echo $tex."<br>";

$tex = ucfirst($texto);
echo $tex."<br>";

$tex = ucfirst($texto);
echo $tex."<br>"; // "João Da Silva"

$texto = "joÃO dA sILva";
$formatado = ucwords(strtolower($texto));
echo $formatado."<br>"; // "João Da Silva"
$texto = substr($texto,0,5);
echo $texto;

?>