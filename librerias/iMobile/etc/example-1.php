<?php

  error_reporting(E_ALL);
  ini_set('display_errors','1');
  $raiz=isset($raiz)?$raiz:"../../../";
  require_once( $raiz.'librerias/iMobile/Configuracion.cnf.php');
  /**
   * Example 1 - This is a minimalist example.
   * All classes in the iMobile package can be converted
   * to string and printed with an 'echo' function.
   */
  $j=new Container();
  $j->addBasicPage(
      'example-1','Example 1','<h1>Hello World</h1><p>This is a basic page!</p><a href="index.php">Home</a> | <a href="example-2.php" data-ajax="false">Example 2</a>'
  );
  echo $j;
  