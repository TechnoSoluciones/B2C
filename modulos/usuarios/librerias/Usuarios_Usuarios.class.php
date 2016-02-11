<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");

  class Usuarios_Usuarios{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_usuarios` SET "
              ."`usuario`='".$datos['usuario']."',"
              ."`alias`='".$datos['alias']."',"
              ."`clave`='".$datos['clave']."',"
              ."`fecha`='".$datos['fecha']."',"
              ."`hora`='".$datos['hora']."',"
              ."`estado`='".$datos['estado']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($usuario,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_usuarios_usuarios` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `usuario`='".$usuario."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($usuario){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_usuarios` "
              ."WHERE `usuario`='".$usuario."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($usuario){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_usuarios` "
              ."WHERE `usuario`='".$usuario."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

      function conteo(){
          $db      =new MySQL();
          $sql     ="SELECT COUNT(*) AS `conteo` FROM `".$configuracion["empresa"]."_usuarios_usuarios`;";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila["conteo"]);
      }

  }

?>