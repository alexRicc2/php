<?php

class Conta
{
  private Titular $titular;
  private float $saldo;
  private static int $numeroContas = 0;

  public function __construct(Titular $titular){
    echo "Criando nova conta" . PHP_EOL;
    $this->saldo = 0;
    $this->titular = $titular;
    self::$numeroContas++;
  }
  public function __destruct(){
    self::$numeroContas--;
  }
  
  public static function getNumeroContas(): int{
    return self::$numeroContas;
  }

  public function getSaldo(): float{
    return $this->saldo;
  }

  public function sacar(float $valorASacar){
    if($valorASacar > $this->saldo || $valorASacar < 0){
      echo "Valor invalido";
      return;
    }
    $this->saldo -= $valorASacar;
    
  }

  public function depositar( float $valorADepositar): void
  {
    if($valorADepositar < 0){
      echo "Valor precisa ser positivo";
      return;
    }
    $this->saldo += $valorADepositar;
    
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void 
  {
    if($valorATransferir > $this->saldo){
      echo "Saldo indisponivel";
      return;
    }
    
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
    
  }
}