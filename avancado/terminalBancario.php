<?php

require 'functions.php';
require 'acounts.php';

$contasCorrentes['029.342.312-23'] = sacar($contasCorrentes['029.342.312-23'], 1000);
$contasCorrentes['029.342.312-23'] = sacar($contasCorrentes['029.342.312-23'], 0);
$contasCorrentes['029.342.312-23'] = sacar($contasCorrentes['029.342.312-23'], -1000);
$contasCorrentes['029.342.312-23'] = sacar($contasCorrentes['029.342.312-23'], 120.30);


$contasCorrentes['029.342.312-23'] = depositar($contasCorrentes['029.342.312-23'], 1000);
$contasCorrentes['029.342.312-23'] = depositar($contasCorrentes['029.342.312-23'], 0);
$contasCorrentes['029.342.312-23'] = depositar($contasCorrentes['029.342.312-23'], -1000);
$contasCorrentes['029.342.312-23'] = depositar($contasCorrentes['029.342.312-23'], 350.30);
$contasCorrentes['029.342.312-23'] = depositar($contasCorrentes['029.342.312-23'], 3000.50);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
        );
}

