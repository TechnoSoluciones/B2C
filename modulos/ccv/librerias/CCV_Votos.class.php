<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");
  if(!class_exists('CCV_Votos')){

      class CCV_Votos{

          function crear($datos){
              $db =new MySQL();
              $sql="INSERT INTO `".$configuracion["empresa"]."_ccv_votos` SET "
                  ."`publicacion`='".$datos['publicacion']."',"
                  ."`usuario`='".$datos['usuario']."',"
                  ."`fecha`='".$datos['fecha']."',"
                  ."`hora`='".$datos['hora']."'"
                  .";";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function actualizar($publicacion,$campo,$valor){
              $db =new MySQL();
              $sql="UPDATE `".$configuracion["empresa"]."_ccv_votos` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `publicacion`='".$publicacion."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($publicacion){
              $db =new MySQL();
              $sql="DELETE FROM `".$configuracion["empresa"]."_ccv_votos` "
                  ."WHERE `publicacion`='".$publicacion."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($publicacion){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$configuracion["empresa"]."_ccv_votos` "
                  ."WHERE `publicacion`='".$publicacion."';";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila);
          }

      }

  }
?>