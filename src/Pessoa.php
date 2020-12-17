<?php


class Pessoa
{
    public string $nome;
    public CPF $cpf;

    /**
     * Pessoa constructor.
     * @param string $nome
     * @param CPF $cpf
     */
    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function recuperaCpf(): CPF
    {
        return $this->cpf;
    }




}