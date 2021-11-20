<?php

class Carro {

  private $modelo;
  private $motor;
  private $ano;

  // getters and setter for all attributes

  public function setModelo($modelo){
    $this->modelo = $modelo;
  }
  public function getModelo(){
    return $this->modelo;
  }

  public function setMotor($motor){
    $this->motor = $motor;
  }
  public function getMotor(){
    return $this->motor;
  }

  public function setAno($ano){
    $this->ano = $ano;
  }

  public function getAno():int{
    return $this->ano;
  }

  public function exibir(){
    return array(
      'modelo' => $this->getModelo(),
      'motor' => $this->getMotor(),
      'ano' => $this->getAno()
    );
  }
}

$monza = new Carro();
$monza->setModelo('LSE');
$monza->setMotor('2.0');
$monza->setAno('1985');

var_dump($monza->exibir());