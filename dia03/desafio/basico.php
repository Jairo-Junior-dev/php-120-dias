<?php
    $soma = 10 + 5;
    $sub = 10 - 5;
    $div = 125 / 5;
    $mul = 25 * 5;
    $res = 10 % 5;
    $exp = 5 ** 3;

    echo "SOMA: ".$soma."<br>";
    echo "Sub: ".$sub."<br>";
    echo "DIV: ".$div."<br>";
    echo "MUL: ".$mul."<br>";
    echo "RES: ".$res."<br>";
    echo "EXP: ".$exp."<br>";

    var_dump($mul == $exp);
    var_dump($mul === "125");


?>