<?php 
$array = array(1,2,3,4,5,6,7);
function dobro($val){return $val*$val;}
var_dump(array_map('dobro',$array));

?>