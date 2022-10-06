<?php

require_once 'funcoes.php';

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

$contasCorrentes['123'] = sacar($contasCorrentes['123'], 500);
$contasCorrentes['789'] = sacar($contasCorrentes['789'], 500);
$contasCorrentes['123'] = depositar($contasCorrentes['123'], 500);

titularComLetrasMaisculas($contasCorrentes['123']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}