<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/Configuracion.cnf.php");
  if(!class_exists('CCV_Publicaciones')){

      class CCV_Publicaciones{

          function crear($datos){
              $db =new MySQL();
              $sql="INSERT INTO `".$configuracion["empresa"]."_ccv_publicaciones` SET "
                  ."`usuario`='".$datos['usuario']."',"
                  ."`publicacion`='".$datos['publicacion']."',"
                  ."`categoria`='".$datos['categoria']."',"
                  ."`fecha`='".$datos['fecha']."',"
                  ."`hora`='".$datos['hora']."',"
                  ."`creador`='".$datos['creador']."'"
                  .";";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function actualizar($usuario,$campo,$valor){
              $db =new MySQL();
              $sql="UPDATE `".$configuracion["empresa"]."_ccv_publicaciones` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($usuario){
              $db =new MySQL();
              $sql="DELETE FROM `".$configuracion["empresa"]."_ccv_publicaciones` "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($usuario){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$configuracion["empresa"]."_ccv_publicaciones` "
                  ."WHERE `usuario`='".$usuario."';";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila);
          }

      }

  }
?>