<?php
$array1 = array("cor"=>"Vermelho","Verde","Azul","Amarelo","Preto");
$array2 = array("cor"=>"Vermelho","Verde","Azul");

$result = array_diff($array1 ,$array2);
print_r($result);
?>