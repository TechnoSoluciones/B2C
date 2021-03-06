<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Permisos')){

      class Usuarios_Permisos{

          var $tabla;

          function Usuarios_Permisos(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_permisos";
              $db           =new MySQL();
              if($db->sql_tableexist($this->tabla)){
                  echo("Existe");
              } else{
                  echo("No Existe se creara");
                  $this->inicializar();
              }
          }

          function crear($datos){
              $db =new MySQL();
              $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_permisos` SET "
                  ."`permiso`='".$datos['permiso']."',"
                  ."`modulo`='".$datos['modulo']."',"
                  ."`nombre`='".$datos['nombre']."',"
                  ."`descripcion`='".$datos['descripcion']."',"
                  ."`fecha`='".$datos['fecha']."',"
                  ."`hora`='".$datos['hora']."',"
                  ."`creador`='".$datos['creador']."'"
                  .";";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function actualizar($modulo,$campo,$valor){
              $db =new MySQL();
              $sql="UPDATE `".$configuracion["empresa"]."_usuarios_permisos` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `modulo`='".$modulo."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($modulo){
              $db =new MySQL();
              $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_permisos` "
                  ."WHERE `modulo`='".$modulo."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($modulo){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_permisos` "
                  ."WHERE `modulo`='".$modulo."';";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila);
          }

          function inicializar(){
              $db      =new MySQL();
              $sql     ="";
              $consulta=$db->sql_query($sql);
              $db->sql_close();
          }

      }

  }
?>