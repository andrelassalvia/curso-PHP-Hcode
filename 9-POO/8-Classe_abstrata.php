<?php

// Classe abstrata define o que as demais classes devem fazer e seus metodos
// Objeto nao instancia classe abstrata

interface Veiculo{
  public function acelerar($velocidade);
  public function frear($velocidade);
  public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
  public function acelerar($velocidade){
    echo "O veiculo acelerou ate ".$velocidade.'km/h';
  }

  public function frear($velocidade){
    echo "O veiculo freou ate ".$velocidade.' km/h';
     
  }

  public function trocarMarcha($marcha){
    echo "O veiculo trocou a marcha para ".$marcha;

  }
}

class DelRey extends Automovel {
  public function empurrar(){

  }
}

$carro = new DelRey();
$carro->acelerar(200);