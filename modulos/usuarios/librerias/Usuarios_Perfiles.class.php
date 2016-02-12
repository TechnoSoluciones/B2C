<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");

  class Usuarios_Perfiles{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_perfiles` SET "
              ."`USUARIO`='".$datos['USUARIO']."',"
              ."`EMPRESA`='".$datos['EMPRESA']."',"
              ."`CAMPO`='".$datos['CAMPO']."',"
              ."`VALOR`='".$datos['VALOR']."',"
              ."`FECHA`='".$datos['FECHA']."',"
              ."`HORA`='".$datos['HORA']."',"
              ."`CREADOR`='".$datos['CREADOR']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($USUARIO,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `USUARIO`='".$USUARIO."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($USUARIO){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."WHERE `USUARIO`='".$USUARIO."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($USUARIO){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."WHERE `USUARIO`='".$USUARIO."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

  }

?>