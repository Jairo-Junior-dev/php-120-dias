<?php
$array = ["Maçã","Tomate","Pera","Uva","Abobora","abacaxi"];
function cmp($a,$b){
    return (strncasecmp($a,$b,7) < 0);
}
usort($array,'cmp');
var_dump($array);
?>