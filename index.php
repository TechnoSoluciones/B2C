<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Centro Comercial Virtual v1.0</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="liberias/javascript/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="liberias/javascript/jquery.js" type="text/javascript"></script>
        <script src="liberias/javascript/jquery.mobile-1.4.5.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">


    </head>
    <body>
        <div data-role="page" class="jqm-demos jqm-home">
            <div data-role="header" class="jqm-header">
                <h2><img src="imagenes/ccvlogo.png" alt="Centro Comercial Virtual"></h2>
                <p>Centro Comercial Virtual<span class="jqm-version"></span></p>
                <a href="#nav-panel" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
                <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Buscar</a>
            </div><!-- /header -->
            <div data-role="content" class="jqm-content">
            </div><!-- /content -->
            <?php require_once("modulos/ccv/componentes/menu.xhr.php");?>
            <div data-role="footer" data-position="fixed" class="jqm-footer">
                <h1 aria-level="1" role="heading" class="ui-title">Bienvenido</h1>
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>