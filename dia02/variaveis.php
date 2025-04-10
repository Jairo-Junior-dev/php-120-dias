<?php
//Criação da variavel usa-se $ + nome da variavel ;
// usa-se = para atribuir um valor a variavel ;
// Php tem uma tipagem dinamica {significa que não é obrigatório especificar o tipo de uma variável ao criá-la.}//Google
//fracamente tipada.

//Contudo, a versão 7.4 nos trouxe uma 
//pequena novidade que altera esse conceito, 
//pelo menos no escopo da Orientação a Objetos. 
//Agora podemos definir o tipo dos atributos que criarmos em nossas classes.
$valor = 5 ; 

$nome = "Jairo";

$tamanho = 1.85;

$feliz = true;
//Array é um map ordenado ,tendo como sua construção as chaves e seus respectivos valores 
$array = ["Nome"=>"Jairo","Idade"=>25];

?>


<?php   
    print "$valor".PHP_EOL."<br>";
    print "$feliz".PHP_EOL."<br>";
    print "$nome".PHP_EOL."<br>";
    print "$tamanho".PHP_EOL."<br>"; 
    
?>