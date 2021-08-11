<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float $valor): array {
    if($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else if ($valor <= 0) {
        exibeMensagem("Saque sem valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor): array {
    if($valor < 0) {
        exibeMensagem("Você não pode adicionar valores negativos.");
    } else if ($valor == 0) {
        exibeMensagem("Depósito sem valor.");
    } else {
        $conta['saldo'] += $valor;
    }

    return $conta;
}
