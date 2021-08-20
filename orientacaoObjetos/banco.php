<?php

require_once 'autoload.php';

use Alura\Banco\Model\Account\{Titular, Conta};
use Alura\Banco\Model\{CPF, Endereco};

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
