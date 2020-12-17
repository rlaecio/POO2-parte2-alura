<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');
$vinicius = (new Titular(new CPF('123.456.789-00'),'Vinicius Dias', $endereco ));
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;;
echo Conta::recuperaNumeroDeContas() . PHP_EOL;


var_dump($primeiraConta);