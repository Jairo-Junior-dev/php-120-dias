<?php
$array1 = array( 
    1,2,3,4,5,6,7,8,9
    );
 function expo ($num ,$expo)  {
        return $num += $expo;
    };
    print_r(array_reduce($array1,'expo'));


?>