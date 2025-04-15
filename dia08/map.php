<?php


$expo = 3;

$array1 = array( 
1,2,3,4,5,6,7,8,9
);
$expor = function ($num) use ($expo) {
    return $num ** $expo;
};

print_r(array_map('expor',$array1));


?>
