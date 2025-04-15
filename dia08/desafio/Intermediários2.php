<?php 
$array = array("Produto"=>"Camisa","Preço"=>25.5);

$preco = $array["Preço"];

print_r($preco);

$desconto = array_map(function($val){ 
    return is_numeric($val) ? number_format((  $val - (( $val * 10 ) /100 )) ,2 ):$val;},
    $array);

var_dump($desconto);
?>
