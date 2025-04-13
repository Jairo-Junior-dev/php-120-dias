<?php
$texto = $_GET["texto"]
?>

<?php
    function converteParaMaiusculo($texto):string{
        $texto[2] = strtoupper($texto);
        return $texto ;
    }
    echo converteParaMaiusculo($texto);
?>