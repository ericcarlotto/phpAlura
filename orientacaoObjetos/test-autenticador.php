<?php

use Alura\Banco\Model\Account\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Employee\Diretor;
use Alura\Banco\Model\Employee\Gerente;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';


$autenticador1 = new Autenticador();
$funcionario1 = new Diretor(
    'Eric Marabelo',
    new CPF(
        '403.134.234-23'
    ),
    10000
);

$autenticador2 = new Autenticador();
$funcionario2 = new Gerente(
    'Mariana Gucci',
    new CPF(
        '773.132.324-21'
    ),
    5000
);

$autenticador3 = new Autenticador();
$funcionario3 = new Titular(
    new CPF(
        '736.143.234-32'
    ),
    'Felipe Farra',
    new Endereco(
        '',
        '',
        '',
        ''
    )
);



$autenticador1->tentaLogin($funcionario1, '1234');

echo PHP_EOL;

$autenticador2->tentaLogin($funcionario2, '4321');

echo PHP_EOL;

$autenticador3->tentaLogin($funcionario3, 'abcd');