<?php
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime('now', $fuso);

// Exibe a data atual formatada
echo $data->format('d-m-Y H:i:s') ."<br>";

// Modifica para +1 dia
$data->modify('+1 day');

// Exibe novamente, formatado
echo $data->format('d-m-Y H:i:s')."<br>";
$testes = [
    '+1 day', '-2 days',
    'next Monday', 'last Friday',
    'first day of next month',
    'last day of February 2026',
    '+1 year +2 months -10 days',
];

foreach ($testes as $expressao) {
    $data = new DateTime();
    $data->modify($expressao);
    echo "Expressão: $expressao => " . $data->format('d-m-Y H:i:s') ."<br>";
}
?>
