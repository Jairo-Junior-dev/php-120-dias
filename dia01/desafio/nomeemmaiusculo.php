<?php 
function towUp($nome):string{


    $nome[0] =  strtoupper($nome);
    
    return $nome;
}
?>
<?= print towUp("jairo") ?>
