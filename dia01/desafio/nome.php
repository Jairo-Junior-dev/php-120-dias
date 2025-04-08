<!--
    - Crie um script que mostre seu nome, idade e cidade
    - Faça a soma, subtração, multiplicação e divisão de dois números
    -->


    
<?php
$nome = "jairo";
$idade = 27;
$cidade = "Brasilia";
$pessoa = ["Nome"=>$nome , "Idade"=>$idade , "Cidade" => $cidade];
?>

<?php foreach($pessoa as $jairo=>$value ): ?>
    <p><?php print "$jairo: $value \n " ?> </p>
<?php endforeach; ?>



