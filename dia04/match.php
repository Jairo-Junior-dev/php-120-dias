<?php $idade = 20;?>


<?php 
$saida = match(true){
($idade < 2 )=> "Bebe",
($idade < 13 )=> "Criança",
($idade <= 19 )=> "Adolecente",
($idade < 40 )=> "Adulto de Meia Idade",
($idade > 19 )=> "Adulto Jovem"
};
var_dump( $saida);


$bolo = $_GET["doce"];
$doce = match($bolo){
"bolo"=>" O doce escolhido foi o bolo ",
"brigadeiro"=>" O doce escolhido foi o Brigadeiro ",

};
var_dump($doce);
?>