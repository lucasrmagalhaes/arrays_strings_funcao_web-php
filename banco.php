<?php

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
    echo $cpf . ' - ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}