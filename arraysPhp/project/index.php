<?php

namespace Service;

require 'autoload.php';

/*
 * COMANDO PARA STARTAR O SERVER PHP -S 0.0.0.0:8000 (PORTA)
 * PARA USO DO EXEMPLO CALCULADORA
 *
*/
$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

echo "<p>A média é : $media</p>";



/*
 * EXEMPLO USANDO ARRAYUTILS
 *
*/
$correntistas_e_compras = [
    "Giovanni",
    "João",
    32,
    "Maria",
    12,
    "Luis",
    "Katarina",
    "32",
    "Joana",
];

echo "<pre>";

echo var_dump($correntistas_e_compras);

ArrayUtils::remover("Giovanni", $correntistas_e_compras);

ArrayUtils::remover("12", $correntistas_e_compras);

echo var_dump($correntistas_e_compras);

echo "</pre>";

/*
 *  ARRAYS ASSOCIATIVOS
 */

$correntista = [
  "Giovanni",
  "João",
  "Maria",
  "Lúcia",
  "Marcelo",
  "Felipe",
  "Morgana",
];

$saldos = [
  3000,
  9000,
  900430,
  2100,
  2344,
  7443,
  1400,
];

$relacionados = array_combine($correntista, $saldos);

echo "<pre>";
if (array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado.";
}
echo "</pre>";

echo "<pre>";
if (array_key_exists("Joao", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado.";
}
echo "</pre>";

echo "<pre>";
foreach ($relacionados as $titular => $saldo) {
    echo "O saldo de {$titular} é : {$saldo}";
    echo PHP_EOL;
}
echo "</pre>";

$maiores = ArrayUtils::encontrarPessoasSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";