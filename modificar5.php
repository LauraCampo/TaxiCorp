<?php header('Content-type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <!--<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>-->
        <script src="jQuery_3_2_0.js"></script>
        <!-- enlace a los estilos -->
        <link type="text/css" media="screen" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" />
        <!--<link type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>-->
        <!-- enlace a la versión de jquery ui-->
        <script   src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
        <!--<script src="jquery-ui-1.12.1.custom/jquery-ui.js" />-->
        <script type="text/javascript" src="scripts.js"></script>
    </head>
    <body>
<?php
    //conexion con la base de datos:
    $conexion= mysqli_connect("127.0.0.1","root","localtestdeveloper","TaxiCorpLCB");
    //$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
    // aqui hace el update:
    $sel="UPDATE taxis SET "
            . "Modelo='".$_POST["Modelo"]."',"
            . "Nombre='".$_POST["Nombre"]."',"
            . "Apellidos='".$_POST["Apellidos"]."',"
            . "Ocupado=".$_POST["Ocupado"]
            . " WHERE Matricula='".$_POST["Matricula"]."'";
    $exec= mysqli_query($conexion, $sel);
    if($exec){
        echo("<div><p>Modificaci&oacute;n realizada.</p>");
    }
    else{
        echo("<div><p>Se ha producido un error.</p>");  
    }
 ?> 
    </body>
</html>