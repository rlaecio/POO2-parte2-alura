<?php


namespace Alura\Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalarios() * 2;
    }

    public function podeAltentica(string $senha): bool
    {
        return $senha === '1234';
    }

}