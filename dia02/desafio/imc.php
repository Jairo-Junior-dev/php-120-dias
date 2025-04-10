<?php require_once 'infor.php';?>


<?php
if ($imc <= 18.8) {
   $classificacao = "Abaixo do peso normal";
}else if($imc >= 18.9 && $imc<= 24.9){
    $classificacao = "Peso normal";
}else if($imc >= 25 && $imc<= 29.9){
    $classificacao = "Excesso de peso";
}else if($imc >= 30 && $imc<= 34.9){
    $classificacao = "Obesidade classe I";
}else if($imc >= 35 && $imc<= 39.9){
    $classificacao = "Obesidade classe II";
}else if($imc >= 40 ){
    $classificacao = "Obesidade classe III";
}


$array = [$nome , $idade,$peso,$altura,$imc,$classificacao];
echo "O imc do $nome é de $imc e sua classificaão é $classificacao";
echo "<br>";
echo "<br>";
echo "Nome: ". gettype($nome)."<br>";
echo "Idade: ". gettype($idade)."<br>";
echo "Peso: ". gettype($peso)."<br>";
echo "Altura: ". gettype($altura)."<br>";
echo "IMC: ". gettype($imc)."<br>";
echo "Classificação: ". gettype($classificacao)."<br>";
echo "<br>";
echo "<br>";
var_dump($array);

?>