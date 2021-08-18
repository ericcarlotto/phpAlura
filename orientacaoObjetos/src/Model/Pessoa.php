<?php

namespace Alura\Banco\Model;

use AccessProprietaries;
use AtualizaPropriedades;

/**
 * @property-read string $nome
 */

abstract class Pessoa
{
    protected $nome;
    private $cpf;

    use AtualizaPropriedades, AccessProprietaries;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
