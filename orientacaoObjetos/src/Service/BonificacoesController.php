<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Employee\Funcionario;

class BonificacoesController
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}