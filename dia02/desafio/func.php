<?php
function somar(float $peso, float $altura):float{

    $imc =$peso/($altura * $altura);
    return number_format($imc,2);        
}

echo somar(120,1.85);
?>