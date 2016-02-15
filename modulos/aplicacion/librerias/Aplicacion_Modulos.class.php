<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");

  class Aplicacion_Modulos{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_aplicacion_modulos` SET "
              ."`modulo`='".$datos['modulo']."',"
              ."`nombre`='".$datos['nombre']."',"
              ."`descripcion`='".$datos['descripcion']."',"
              ."`fecha`='".$datos['fecha']."',"
              ."`hora`='".$datos['hora']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($modulo,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_aplicacion_modulos` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `modulo`='".$modulo."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($modulo){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_aplicacion_modulos` "
              ."WHERE `modulo`='".$modulo."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($modulo){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_aplicacion_modulos` "
              ."WHERE `modulo`='".$modulo."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

  }
  