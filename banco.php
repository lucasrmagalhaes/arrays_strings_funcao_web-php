<?php

function exibeMensagem(string $mensagem): void 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    $valorADepositar > 0 
        ? $conta['saldo'] += $valorADepositar 
        : exibeMensagem("Informe um valor positivo!");

    return $conta;
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

// $contasCorrentes['123'] = sacar($contasCorrentes['123'], 500);
// $contasCorrentes['789'] = sacar($contasCorrentes['789'], 500);

$contasCorrentes['123'] = depositar($contasCorrentes['123'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' - ' . $conta['titular'] . ' ' . $conta['saldo']);
}