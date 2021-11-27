<?php

// Onde procurar as classes

spl_autoload_register(function($nameClass){

  $dirClass = 'class';
  $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.'.php'; // path do arquivo

  if(file_exists($filename)){
    require_once($filename);
  }
});