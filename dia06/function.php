<?php
    // Sem retorno
    function sayHello(){
        echo "Hello";}

        function sayHelloWithReturn():string{
            return "Hello with return";
        }
        
        //sayHello();
        //echo sayHelloWithReturn();
        function somar($num1 , $num2 = 3):float{
            return $num1 + $num2;
        }
        echo somar(2)."<br>";
        echo somar(4,5);
?>