<?php

// Criamos os arquivos com as classes Automovel e DelRey, que extende de Automovel.
// Agora vamos instanciar as classes.

// Require_once() nao é eficiente pois teriamos que instanciar as classes DelRey e Automovel.
// Se houvesse mais classes para cima, o que é comum, teríamos que utilizar varios Require_onces.


function __autoload($nomeClasse){
  // var_dump($nomeClasse);
  require_once ($nomeClasse.'.php');
}
// Primeiro o autoload chama a classe DelRey
// Depois se auto carrega e chama a classe Automovel.

$carro = new DelRey();
$carro->acelerar(20);

