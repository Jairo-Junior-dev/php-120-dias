<?php
$nome ="Pedro";
$idade =25;
$sexo = 'M';
$nota = 6;
$verificado = false;
$vezesverificado = 0;
$visitante = "Pedro";

if ($nome == "Pedro" && $sexo  == 'M' && $nota >=6 && !$verificado) {
    print "Aprovado <br>";
    $verificado = true;
    $vezesverificado +=1;
    $val = $visitante ?: "Visitante";
}

if ($nome == "Pedro" && $sexo  == 'M' && $nota >=6 && !$verificado) {
    print "Aprovado<br>";
    $verificado = false;
    $vezesverificado +=1;
}
echo "Vezes Verificado $vezesverificado <br>";
echo $val;
?>