<?php $arr = [
    'N1' => 8,
    'N2' => 7,
    'N3' => 6.5,
    'N4' => 5,
    'N5' => 4,
    'N6' => 5.7,
    'N7' => 9,
    'N8' => 10,
    'N9' => 4.3,
]; ?>

<?php
function nota($val) {
    return $val >= 6;
};
echo"Aprovados <br>";
var_dump(array_filter($arr,'nota'));

echo"<br>Reprovados <br>";
var_dump(array_filter($arr,function($val){
    return $val<6;
}));

?>
