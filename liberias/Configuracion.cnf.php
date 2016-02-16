<?php
  
  class Configuracion{
      var $propiedades;
       function Configuracion(){
          $this->propiedades["prefijo"]="ccv";
      }
      
       function propiedad($dato){
          return($this->propiedades[$dato]);
      }
      
  }
  
  
    /** Librerias **/
  $raiz=isset($raiz)?$raiz:"../";
  require_once($raiz."liberias/MySQL.class.php");
  
  
  ?>