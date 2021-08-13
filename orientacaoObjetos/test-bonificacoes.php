<?php

require_once 'autoload.php';

use Alura\Banco\Service\BonificacoesController;
use Alura\Banco\Model\{CPF, Employee\Desenvolvedor, Employee\Diretor, Employee\Gerente, Funcionario};

$funcionario1 = new Diretor(
    'Josué Trindade',
    new CPF(
        '934.432.654-32'
    ),
    5000
);

$funcionario2 = new Gerente(
    'Tânia Somelie',
    new CPF(
        '234.197.045-26'
    ),
    3000
);

$funcionario3 = new Desenvolvedor(
    'Alicia Lost',
    new CPF(
        '234.154.345-43'
    ),
    1000
);

$funcionario3->sobeNivel();

$controlador = new BonificacoesController();
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);
$controlador->adicionaBonificacao($funcionario3);


echo $funcionario1->recuperaSalario();
echo PHP_EOL;
echo $funcionario2->recuperaSalario();
echo PHP_EOL;
echo $funcionario3->recuperaSalario();
echo PHP_EOL;

echo $controlador->recuperaTotal();