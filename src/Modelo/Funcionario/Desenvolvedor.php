<?php


namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalarios() * 0.75);
    }

}