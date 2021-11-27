<?php

require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Djalma Sindeaux');
$cad->setEmail('djalma@contato.com');
$cad->setSenha('123456');
$cad->registrarVenda();
