<?php

function exibeMensagem(string $mensagem): void 
{
    echo $mensagem . '<br />';
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

function titularComLetrasMaisculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']); // strtoupper
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular Saldo: $saldo</li>";
}