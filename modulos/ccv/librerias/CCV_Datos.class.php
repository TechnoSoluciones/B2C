<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");
  if(!class_exists('CCV_Datos')){

      class CCV_Datos{

          function crear($datos){
              $db =new MySQL();
              $sql="INSERT INTO `".$configuracion["empresa"]."_ccv_datos` SET "
                  ."`dato`='".$datos['dato']."',"
                  ."`publicacion`='".$datos['publicacion']."',"
                  ."`campo`='".$datos['campo']."',"
                  ."`valor`='".$datos['valor']."',"
                  ."`fecha`='".$datos['fecha']."',"
                  ."`hora`='".$datos['hora']."',"
                  ."`creador`='".$datos['creador']."'"
                  .";";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function actualizar($dato,$campo,$valor){
              $db =new MySQL();
              $sql="UPDATE `".$configuracion["empresa"]."_ccv_datos` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `dato`='".$dato."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($dato){
              $db =new MySQL();
              $sql="DELETE FROM `".$configuracion["empresa"]."_ccv_datos` "
                  ."WHERE `dato`='".$dato."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($dato){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$configuracion["empresa"]."_ccv_datos` "
                  ."WHERE `dato`='".$dato."';";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila);
          }

      }

  }
?>