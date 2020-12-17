<?php


class Titular extends Pessoa
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }


    /**
     * @return string
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumeroCpf();
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    /**
     * @return Endereco
     */
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }




}