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

$contasCorrentes['123'] = sacar($contasCorrentes['123'], 100);
$contasCorrentes['789'] = sacar($contasCorrentes['789'], 100);
$contasCorrentes['123'] = depositar($contasCorrentes['123'], 500);

unset($contasCorrentes['456']);

titularComLetrasMaisculas($contasCorrentes['123']);

?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    
    <body>
        <h1>Contas correntes</h1>

        <dl>
            <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
                <dt>
                    <h3>
                        <?= $conta['titular']; ?> - <?= $cpf; ?>
                    </h3>
                </dt>

                <dd>
                    Saldo: <?= $conta['saldo']; ?>
                </dd>
            <?php } ?>
        </dl>
    </body>
</html>