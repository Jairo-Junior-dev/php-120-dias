<?php 
$nome = $_GET["nome"];
$idade = $_GET["idade"] ;
$altura = 1.85;
$status = false;

?>
<?php
  
  if($idade >=18&& $idade <=70 ){
      echo " Olá $nome. Você já pode ser preso";    
    }else if($idade > 70){
        echo " Você esta velho demais para ser preso";
    }else{
        echo " Pode ficar tranquilo, mas infelizmente não poderá beber ";
    }

//echo $_SERVER["REQUEST_METHOD"];

?>