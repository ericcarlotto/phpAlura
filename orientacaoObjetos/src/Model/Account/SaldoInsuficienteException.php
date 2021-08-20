<?php

namespace Alura\Banco\Model\Account;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $message = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent::__construct($message);
    }
}