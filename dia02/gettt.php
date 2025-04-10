<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}
echo"<br>";
echo"usando var_dump <br>";
//Var_dump além de mostrar os valores e seus index ele tb mostra a tipagem
var_dump($data);
echo"<br>";
//print_r  apenas mostra os valores e seus index 
echo"usando print_r <br>";
print_r($data);
?>