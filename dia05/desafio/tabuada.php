<?php $valor = $_GET["valor"];?>

<?php for($index = 0 ; $index <=10; $index ++ ):?>
<h1>O valor de <?php $newValor= $index * $valor; echo "$index * $valor  = $newValor"?>  </h1>
<?php endfor; ?>