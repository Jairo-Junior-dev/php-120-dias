<?php $produtos = ["Banana"=>3.5 , "Maça"=> 3.10 , "Pera"=>5.0]; $total = 0;?>

<?php foreach($produtos as $key => $value) {
    echo "Produto: $key => Valor $value"."<br>"."<br>";
    $total = $value + $total;

}    
    echo"Valor Total :". $total;
?>