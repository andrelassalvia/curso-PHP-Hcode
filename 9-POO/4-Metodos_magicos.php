<?php

class Endereco{

  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($log, $num, $city){
    $this->logradouro = $log;
    $this->numero = $num;
    $this->cidade = $city;
  }

  public function __destruct(){
    // var_dump('DESTRUIR');
  }

  public function __toString(){
    return 'Endereco: '. $this->logradouro.', '.$this->numero.' - '.$this->cidade;
  }
}

$meuEndereco = new Endereco('Brampton', '20', 'London');
echo $meuEndereco;

// var_dump($meuEndereco);

// unset($meuEndereco);

/*
ESSES SAO TODOS OS METODOS MAGICOS
__construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone() e __debugInfo()
*/