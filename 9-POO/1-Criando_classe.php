<?php

class Pessoa {

  public $nome;

  public function falar(){
    return 'Ola, meu nome e '.$this->nome.'.';
  }
}

$andre = new Pessoa();
$andre->nome = 'Andre';
echo $andre->falar();
