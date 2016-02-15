<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");
  if(!class_exists('Usuarios_Empresas')){
  class Usuarios_Empresas{

      function crear($datos){
          $db =new MySQL();
          $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_empresas` SET "
              ."`empresa`='".$datos['empresa']."',"
              ."`fecha`='".$datos['fecha']."',"
              ."`hora`='".$datos['hora']."',"
              ."`nombre`='".$datos['nombre']."',"
              ."`descripcion`='".$datos['descripcion']."'"
              .";";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function actualizar($empresa,$campo,$valor){
          $db =new MySQL();
          $sql="UPDATE `".$configuracion["empresa"]."_usuarios_empresas` "
              ."SET `".$campo."`='".$valor."' "
              ."WHERE `empresa`='".$empresa."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function eliminar($empresa){
          $db =new MySQL();
          $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_empresas` "
              ."WHERE `empresa`='".$empresa."';";
          $db->sql_query($sql);
          $db->sql_close();
      }

      function consultar($empresa){
          $db      =new MySQL();
          $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_empresas` "
              ."WHERE `empresa`='".$empresa."';";
          $consulta=$db->sql_query($sql);
          $fila    =$db->sql_fetchrow($consulta);
          $db->sql_close();
          return($fila);
      }

  }}
?>

