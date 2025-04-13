<?php 
    $preco =$_GET["preco"];
    $ano =$_GET["ano"];
    $nota =$_GET["nota"];
?>
<?php require_once 'funcoes.php'?>

<?php
    echo "R$: ". formataPreco($preco)."<br>";
    echo " Sua Idade é de ".calculaIdade($ano)." anos "."<br>";
    echo "Situação ".aprovadoOuReprovado($nota)."<br>";
?>
