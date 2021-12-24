<?php

class Cpf{

  private string $numero;

  public function __construct(string $numero){
    $this->numero = $numero;
  }

  public function getNumero(): string{
    return $this->numero;
  }
}