<?php
  $root=isset($root)?$root:"../../../";
  require_once($root."librerias/JQueryMobilePHP/JQueryMobilePHP.class.php");
  $jqmphp =new JQueryMobilePHP();


  $html      ="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Centro Comercial Virtual v1.0</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="librerias/javascript/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/javascript/jquery.js" type="text/javascript"></script>
        <script src="librerias/javascript/jquery.mobile-1.4.5.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">


    </head>
    <body>
        <?php
          $title     =$jqmphp->title(array("html"=>"<img src=\"imagenes/ccvlogo.png\" alt=\"Centro Comercial Virtual\">"));
          $parragraph=$jqmphp->paragraph(array("html"=>""));
          $hbl       =$jqmphp->headerButton(array("href"=>"#nav-panel","html"=>"Menu","direction"=>"left"));
          $hbr       =$jqmphp->headerButton(array("href"=>"busqueda.php?#pagesearch","html"=>"Buscar","direction"=>"right"));
          $html.=$jqmphp->header(array("html"=>$title.$parragraph.$hbl.$hbr,"help"=>"help"));
          $html.=$jqmphp->content(array("html"=>""
                ."    <ul data-role=\"listview\" data-inset=\"true\">\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo1-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo2-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo3-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo4-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo5-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo6-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."      <li><a href=\"#\"><img src=\"imagenes/demo7-220x220.jpg\">Anillo de compromiso clásico 18 K real rose plateó AAA flechas CZ amantes del diamante promise Ring para hombres mujeres</a></li>\n"
                ."    </ul>\n"
                .""));
          $html.=$jqmphp->footer(array("html"=>"<h1 aria-level=\"1\" role=\"heading\" class=\"ui-title\">Bienvenido</h1>"));
          $html      =$jqmphp->page(array("html"=>$html));
          echo($html);
        ?>
    </body>
</html>