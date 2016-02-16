<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Perfiles')){

      class Usuarios_Perfiles{

          var $tabla;

          function Usuarios_Perfiles(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_perfiles";
              $db           =new MySQL();
              if($db->sql_tableexist($this->tabla)){
                  //echo("Existe");
              } else{
                  //echo("No Existe se creara");
                  $this->inicializar();
              }
          }

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

          function inicializar(){
              $db      =new MySQL();
              $sql     ="";
              $consulta=$db->sql_query($sql);
              $db->sql_close();
          }

      }

  }
?>