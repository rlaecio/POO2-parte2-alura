<?php

require_once 'autoload.php';

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor, Desenvolvedor};


$umfuncionario = new Desenvolvedor(
    'Vinivius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umaGerente = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.456.789-11'),
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umfuncionario);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperatotal() .PHP_EOL;
