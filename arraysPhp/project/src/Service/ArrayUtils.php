<?php declare(strict_types=1);

namespace Service;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array): void
    {
        $posicao = array_search($elemento, $array);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Elemento não encontrado no array.";
        }
    }

    public static function encontrarPessoasSaldoMaior(int $saldo, array $array): array
    {
        $correntistasSaldoMaior = array();

        foreach ($array as $key => $value) {
            if ($value > $saldo) {
                $correntistasSaldoMaior[] = $key;
            }
        }

        return $correntistasSaldoMaior;
    }
}