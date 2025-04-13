<?php   $ehPar = $_GET["valor"];?>

<?php 
    function ehPar($valor = 0):string{
        return ($valor % 2 == 0)?"Par":"Impar";
    }
    echo ehPar($ehPar);

?>