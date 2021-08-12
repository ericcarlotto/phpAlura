<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$jonesramos = new Titular(new CPF('123.432.345-32'), 'Jones Ramos');
$primeiraConta = new Conta($jonesramos);


$juancaballero = new Titular(new CPF('113.654.865-54'), 'Juan Caballero');
$segundaConta = new Conta($juancaballero);

$mariamariah = new Titular(new CPF('736.256.345-23'), 'Maria Mariah');
$terceiraConta = new Conta($mariamariah);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
$primeiraConta->depositar(1500);
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
$segundaConta->depositar(3500);
echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo $terceiraConta->recuperarNomeTitular() . PHP_EOL;
$terceiraConta->depositar(5433);
echo $terceiraConta->recuperarSaldo() . PHP_EOL;