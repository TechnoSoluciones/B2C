<?php

  $raiz=isset($raiz)?$raiz:"../../../";
  require_once($raiz."/liberias/Configuracion.cnf.php");
  // Requires
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Empresas.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Jerarquias.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Perfiles.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Permisos.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Politicas.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Representantes.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Roles.class.php");
  require_once($raiz."modulos/usuarios/librerias/Usuarios_Usuarios.class.php");
  
?>