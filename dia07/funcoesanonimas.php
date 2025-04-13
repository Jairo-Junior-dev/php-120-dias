<?php $message ="Ola"?> 
<!--
    <?php $sayHello = function ($nome) {printf("Hello %s\r\n", $nome);};?>
    <?php $sayHello("Jairo");?>
    
    -->
    <?php

$example = function($message){
    var_dump($message);
};
//Não Mostra
$example("Jairo");
?>
<?php 
    $example = function() use ($message){
        var_dump($message);
    };
$example();
?>