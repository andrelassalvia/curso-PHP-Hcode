<?php

class Animal {
  public function falar(){
    return 'som';
  }

  public function mover(){
    return 'anda';
  }
}

class Cachorro extends Animal{
  public function falar(){
    return 'Late';
  }
}

class Gato extends Animal{
  public function falar(){
    return 'Mia';
  }
}

// chama tambem o metodo da classe Animal
class Passaro extends Animal{
  public function mover(){
    return 'Voa e '. parent::mover();
  }
}

$pluto = new Cachorro();
echo $pluto->falar(), '<br>'; // muda o comportamento do metodo falar
echo $pluto->mover().'<br>'; // nao muda o comportamento do metodo

$tom = new Gato();
echo $tom->falar().'<br>';

$curio = new Passaro();
echo $curio->mover();