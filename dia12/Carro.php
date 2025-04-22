<?php
    require_once 'Automovel.php';

    class Carro extends Automovel{

    }

    $carro = new Carro("Fiat","Fiat Uno",2000);
    $carro->exibirInfor();
?>