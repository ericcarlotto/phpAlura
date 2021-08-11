<?php

$idades = [43,23,19,54,28,58,13,45,18];

for($i=0;$i<count($idades);$i++){
    echo $idades[$i] . PHP_EOL;
}

echo PHP_EOL;

$contasCorrentes = [
    'id:29' => [
        'titular' => 'Eric',
        'saldo' => 5000,
        'cadastro' => 39492039,
    ],
    'id:13' => [
        'titular' => 'José',
        'saldo' => 6430,
        'cadastro' => 92283491,
    ],
    'id:84' => [
        'titular' => 'João',
        'saldo' => 1400,
        'cadastro' => 38274921,
    ],
    'id:1332' => [
        'titular' => 'Juan',
        'saldo' => 98300,
        'cadastro' => 58732938,
    ],
];


foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;

foreach ($contasCorrentes as $id => $conta) {
    echo $id.' ==> '.$conta['titular'] . PHP_EOL;
}