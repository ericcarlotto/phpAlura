<?php

namespace Alura\Banco\Model;


use AccessProprietaries;

/**
 * Class Endereço
 * @package Service\Banco\Model
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;


    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function alteraCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function alteraBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function alteraRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function alteraNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}