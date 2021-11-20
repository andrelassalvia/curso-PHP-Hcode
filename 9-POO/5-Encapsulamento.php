<?php

class Pessoa{

  public $nome = 'Rasmus Lerdorf';
  protected $idade = '48';
  private $senha = '123456';

  public function verDados(){

    echo $this->nome . '<br>';
    echo $this->idade . '<br>';
    echo $this->senha . '<br>';
  }
}

$eu = new Pessoa();
// $eu->verDados();
// echo $eu->nome;
// echo $eu->idade; // Protected -> somente quem esta dentro da propria classe ou quem a herda.
// echo $eu->senha; // private -> somente quem esta dentro da propria classe

class Programador extends Pessoa{

  public function verDados(){

    echo get_class().'<br>';

    echo $this->nome . '<br>';
    echo $this->idade . '<br>';
    echo $this->senha . '<br>';
  } 

}

$obj = new Programador();
$obj->verDados();
