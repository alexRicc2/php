<?php
require_once 'src/Titular.php';
require_once 'src/Conta.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf("123.345.678-10"), "Alex Ricardo"));
$segundaConta = new Conta(new Titular(new Cpf("122.345.678-10"), "Carlos"));
$primeiraConta->depositar(500);
echo "valor após deposito: ",$primeiraConta->getSaldo();
$primeiraConta->sacar(200);
echo "\nvalor após saque: ". $primeiraConta->getSaldo(). PHP_EOL;
var_dump($primeiraConta);

echo PHP_EOL ."Numero de contas: ". Conta::getNumeroContas();