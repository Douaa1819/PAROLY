<?php
//loder 
  // Load Config
  require_once 'config/config.php';
  include_once 'helpers/helpers.php';
  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
