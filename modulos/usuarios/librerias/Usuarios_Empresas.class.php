<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Empresas')){

      class Usuarios_Empresas{

          var $tabla;

          function Usuarios_Empresas(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_empresas";
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

          function inicializar(){
              $db      =new MySQL();
              $sql     ="";
              $consulta=$db->sql_query($sql);
              $db->sql_close();
          }

      }

  }
?>

