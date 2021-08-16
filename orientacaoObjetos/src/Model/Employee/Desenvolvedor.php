<?php

namespace Alura\Banco\Model\Employee;

use Alura\Banco\Model\CPF;

class Desenvolvedor extends Funcionario
{

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf, $salario);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }

    public function sobeNivel()
    {
        $this->recebeAumento($this->recuperaSalario()*0.75);
    }

}