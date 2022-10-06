<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    123 => [
        'titular' => 'Lucas', 
        'saldo' => 1000
    ],
    456 => [
        'titular' => 'Maria', 
        'saldo' => 10000
    ],
    789 => [
        'titular' => 'Roberto', 
        'saldo' => 300
    ]
];

$contasCorrentes['123']['saldo'] -= 500;
$contasCorrentes['789']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' - ' . $conta['titular'] . ' ' . $conta['saldo']);
}