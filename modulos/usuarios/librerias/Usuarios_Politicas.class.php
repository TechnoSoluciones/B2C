<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Politicas')){

      class Usuarios_Politicas{

          var $tabla;

          function Usuarios_Politicas(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_politicas";
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

          function inicializar(){
              $db      =new MySQL();
              $sql     ="";
              $consulta=$db->sql_query($sql);
              $db->sql_close();
          }

      }

  }
?>