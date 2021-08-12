<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct($cpf, string $nome)
    {

        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<3) {
            echo "Nome precisa ter pelo menos 3 caracteres";
            exit();
        }
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

}

