<?php

use Alura\Banco\Model\Account\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Model\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('543.432.654-23'),
        'Joyce Almeida',
        new Endereco('Pindamoiangaba', 'Jamilão', 'Alciede Beniedes', '5432')
    )
);

$conta2 = new ContaCorrente(
    new Titular(
        new CPF('342.267.454-32'),
        'Maraue Marauder',
        new Endereco('Pindamoiangaba', 'Centrin', 'Beco da caída', '89b')
    )
);

$conta->depositar(500);
$conta->sacar(100);

$conta2->depositar(1000);
$conta2->sacar(100);


echo "---------------";
echo PHP_EOL;
echo var_dump($conta);
echo PHP_EOL;
echo "---------------";

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

echo "---------------";
echo PHP_EOL;
echo var_dump($conta2);
echo PHP_EOL;
echo "---------------";

echo PHP_EOL;

echo "---------------";
echo PHP_EOL;
echo $conta->recuperaSaldo();
echo PHP_EOL;
echo "---------------";

echo PHP_EOL;

echo "---------------";
echo PHP_EOL;
echo $conta2->recuperaSaldo();
echo PHP_EOL;
echo "---------------";
