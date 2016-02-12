<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");

  class Usuarios_Politicas{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_politicas` SET "
              ."`rol`='".$datos['rol']."',"
              ."`permiso`='".$datos['permiso']."',"
              ."`fecha`='".$datos['fecha']."',"
              ."`hora`='".$datos['hora']."',"
              ."`creador`='".$datos['creador']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($rol,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_politicas` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `rol`='".$rol."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($rol){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_politicas` "
              ."WHERE `rol`='".$rol."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($rol){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_politicas` "
              ."WHERE `rol`='".$rol."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

  }

?>