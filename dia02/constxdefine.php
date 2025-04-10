<?php
//Cont é usado dentro de uma classe ja o define nao; 
// O php usa o self para referenciar uma constante ou um atributo de classe(static) 


define('Nome', 'Jairo');

class Pessoa{
    
    const  sobrenome = "Pinheiro";

    public  static function mostraNome () {
        echo Nome." ".self::sobrenome;
    }
}
 Pessoa::mostraNome();
?>