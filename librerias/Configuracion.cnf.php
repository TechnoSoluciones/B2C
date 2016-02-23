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
  require_once($raiz."librerias/MySQL.class.php");
    require_once($raiz."librerias/JQueryMobile.class.php");
  
  ?>