<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."modulos/usuarios/librerias/Configuracion.cnf.php");

  if(!class_exists('Usuarios_Usuarios')){

      class Usuarios_Usuarios{

          var $tabla;

          function Usuarios_Usuarios(){
              $configuracion=new Configuracion();
              $this->tabla  =$configuracion->propiedad("prefijo")."_usuarios_usuarios";
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
              $sql="INSERT INTO `".$this->tabla."` SET "
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
              $sql="UPDATE `".$this->tabla."` "
                  ."SET `".$campo."`='".$valor."' "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function eliminar($usuario){
              $db =new MySQL();
              $sql="DELETE FROM `".$this->tabla."` "
                  ."WHERE `usuario`='".$usuario."';";
              $db->sql_query($sql);
              $db->sql_close();
          }

          function consultar($usuario){
              $db      =new MySQL();
              $sql     ="SELECT * FROM `".$this->tabla."` "
                  ."WHERE `usuario`='".$usuario."';";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila);
          }

          function conteo(){
              $db      =new MySQL();
              $sql     ="SELECT COUNT(*) AS `conteo` FROM `".$this->tabla."`;";
              $consulta=$db->sql_query($sql);
              $fila    =$db->sql_fetchrow($consulta);
              $db->sql_close();
              return($fila["conteo"]);
          }

          function inicializar(){
              $db      =new MySQL();
              $sql     ="create table ".$this->tabla."("
                  ."usuario integer(10) not null,"
                  ."alias varchar(128) not null,"
                  ."clave varchar(128) not null,"
                  ."fecha date not null,"
                  ."hora time not null,"
                  ."estado varchar(32) not null,"
                  ."primary key (usuario)"
                  .");";
              $consulta=$db->sql_query($sql);
              $db->sql_close();
          }

      }

  }

  $uu=new Usuarios_Usuarios();
?>