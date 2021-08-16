<?php

require_once 'autoload.php';

use Alura\Banco\Model\Endereco;

$endereco1 = new Endereco(
    'Porto Alegre',
    'Tristeza',
    'Joacir Machado',
    '38b'
);



echo $endereco1;
echo PHP_EOL;