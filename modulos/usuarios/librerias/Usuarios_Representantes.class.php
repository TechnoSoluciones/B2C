<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Presentantes')){

      class Usuarios_Representantes{

          var $tabla;

          function Usuarios_Representantes(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_representantes";
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
              $sql="INSERT INTO `".$configuracion["empresa"]."_usuarios_representantes` SET "
                  ."`usuario`='".$datos['usuario']."',"
                  ."`empresa`='".$datos['empresa']."',"
                  ."`fecha`='".$datos['fecha']."',"
                  ."`hora`='".$datos['hora']."'"
                  .";";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function actualizar($usuario,$campo,$valor){
              $db =new MySQL();
              $sql="UPDATE `".$configuracion["empresa"]."_usuarios_representantes` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($usuario){
              $db =new MySQL();
              $sql="DELETE FROM `".$configuracion["empresa"]."_usuarios_representantes` "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($usuario){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$configuracion["empresa"]."_usuarios_representantes` "
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
