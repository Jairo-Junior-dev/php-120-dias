
<?php 
//valores
$numero01; ;
$numero02; ;
?>


<?php
//operações
$soma = $numero01 + $numero02;
$mul = $numero01 * $numero02;
$div = ($numero02 == 0 )? 0 :($numero01 / $numero02);
$sub = $numero01 - $numero02;
?>

<?php 
    $numero01 = 5;
    $numero02 = 7;
    print "SOMA : DE $numero01 + $numero02 = $soma ";
    print "Mul : DE $numero01 * $numero02 = $mul ";
    print "DIV : DE $numero01 / $numero02 = $div ";
    print "SUB : DE $numero01 - $numero02 = $sub ";

?>