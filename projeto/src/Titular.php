<?php

class Titular{
  private Cpf $cpf;
  private string $nome;

  public function __construct(Cpf $cpf, string $nome){
    $this->validaNome($nome);
    $this->cpf = $cpf;
    $this->nome = $nome;

  }

  private function validaNome(string $nomeTitular){
    if(strlen($nomeTitular) < 5){
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }
  public function getCpf(): string{
    return $this->cpf;
  }
  public function getNome(): string{
    return $this->nome;
  }
}