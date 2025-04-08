<!--

<?php $array = ["Jairo", "Tiago", "Matias"] ?>

<?php
$fruits = ["limão", "laranja", "banana"];
echo implode(" e ", $array); ?>


<?php $nome = "Jairo"  ?>
<?php if ($nome == "dairo"): ?>
    <p><?= "Ola meu nome é" . $nome  ?> </p>
<?php else: ?>
  <p><?= "Desculpa eu não tenho nome" ?></p>
<?php endif; ?>

<?= "Ola\t", "Jairo \n Como vai você ?" ?>

<?php for ($i = 0; $i < count($array); $i++): ?>
  <p><?php print  "$i - $array[$i]" ?> </p>  
<?php endfor; ?>

<?php

$nome = "Jairo";
$idade = 27;
$cidade = "Brasilia";
$pessoa = ["Nome" => $nome, "Idade" => $idade, "Cidade" => $cidade];
?>

<?php foreach ($pessoa as $jairo => $value): ?>
    <p><?php print "$jairo: $value \n " ?> </p>
    <?php endforeach; ?>

    
    
<?php
//valores
$numero01;;
$numero02;;
?>


<?php
//operações

?>

<?php
$numero01 = 5;
$numero02 = 0;

$soma = $numero01 + $numero02;
$mul = $numero01 * $numero02;
$div = ($numero02 == 0) ? "infinity" : ($numero01 / $numero02);
$sub = $numero01 - $numero02;

print "SOMA : DE $numero01 + $numero02 = $soma ";
print "Mul : DE $numero01 * $numero02 = $mul ";
print "DIV : DE $numero01 / $numero02 = $div ";
print "SUB : DE $numero01 - $numero02 = $sub ";

?>
<?php
function towUp($nome): string
{
    $nome[0] =  strtoupper($nome);
    return $nome;
}
?>
<?= print towUp("jairo") ?>
-->
<!--
    <table>
  <caption>
    Front-end web developer course 2021
  </caption>
  <thead>
    <tr>
      <th scope="col">Person</th>
      <th scope="col">Most interest in</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chris</th>
      <td>HTML tables</td>
      <td>22</td>
    </tr>
    <tr>
      <th scope="row">Dennis</th>
      <td>Web accessibility</td>
      <td>45</td>
    </tr>
    <tr>
      <th scope="row">Sarah</th>
      <td>JavaScript frameworks</td>
      <td>29</td>
    </tr>
    <tr>
      <th scope="row">Karen</th>
      <td>Web performance</td>
      <td>36</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th scope="row" colspan="2">Average age</th>
      <td>33</td>
    </tr>
  </tfoot>
</table>


-->

<?php
$nome = "Jairo";
$idade = 27;
$peso = 120;
$array = ["Nome" => $nome, "Idade" => $idade, "Peso" => $peso];

?>

<html>

<head>
</head>

<body>
    <table>
        <caption>
            Front-end web developer course 2021
        </caption>

            <thead>
            </thead>
            <tr>
                <th escope="col"><?php print "Nome" ?></th>
                <th escope="col"><?php print "Idade" ?></th>
                <th escope="col"><?php print "Peso" ?></th>
            </tr>
            <tr>
                <th scope="row"><?php print $array["Nome"] ?></th>
                <td><?php print $array["Idade"] ?></td>
                <td><?php print $array["Peso"] ?></td>
            </tr>
            </tbody>
    </table>

</body>

</html>