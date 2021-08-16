<?php

namespace\Alura\Banco\Model;

trait AtualizaPropriedades
{
    public function __set($nomeAtributo, $value): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);
    }
}