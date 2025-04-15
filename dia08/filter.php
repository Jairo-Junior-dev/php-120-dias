<?php
    $array =[4.3,5,4,5,6,7,7.5,9,9];
    

    print_r(array_filter($array,function($num){
        return ($num<=6);        
    }))
?>