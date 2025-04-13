<?php
//Infelizmente O chat Me ajudou Nessa 
$possivelSenha = "Caramelho";
$quantidadesDeTentativas = 0;
$senha = ""; // começa vazia

while ($senha != $possivelSenha) {
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));
    $quantidadesDeTentativas++;

    if ($senha != $possivelSenha) {
        echo "Você errou || Tentativas: $quantidadesDeTentativas\n";
    }
}

echo "Senha correta! Total de tentativas: $quantidadesDeTentativas\n";
