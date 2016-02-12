<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");

  class Usuarios_Perfiles{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_perfiles` SET "
              ."`usuario`='".$datos['usuario']."',"
              ."`empresa`='".$datos['empresa']."',"
              ."`campo`='".$datos['campo']."',"
              ."`valor`='".$datos['valor']."',"
              ."`fecha`='".$datos['fecha']."',"
              ."`hora`='".$datos['hora']."',"
              ."`creador`='".$datos['creador']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($usuario,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `usuario`='".$usuario."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($usuario){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."WHERE `usuario`='".$usuario."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($usuario){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_perfiles` "
              ."WHERE `usuario`='".$usuario."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

  }

?>