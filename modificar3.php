<?php header('Content-type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
        <meta name="description" content="Empresa de taxis">
        <meta name="author" content="Laura">
        <meta name="keywords" content="Taxi,Chofer,Servicios">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- enlace a los estilos -->
        <link type="text/css" media="screen" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" />
        <!-- enlace a la versión de jquery ui-->
        <script   src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts.js"></script>
    </head>
    <body>
<div id="modificar_datos">  
                <form action="modificar4.php" method="post">
                    <!-- aqui se despliega la lista-->
                    <label for="Matricula">Elegir Matr&iacute;cula</label> <br/>
                    <select id="Matricula" name="Matricula">
                    <option value="" selected="selected">- selecciona -</option>
                    <!-- aqui tiene que hacer un recorrido de las matriculas de la tabla: -->
                    <?php 
                        
                        $conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
                        $sel="SELECT Matricula FROM taxis";      
                        $exec= mysqli_query($conexion, $sel);
                    
                            while($registro= mysqli_fetch_array($exec)){
                                echo("<option value='".$registro[0]."'>".$registro[0]."</option>");
                            };
                    ?>        
                    </select>
                    <input type="submit" class="boton" value="Realizar B&uacute;squeda" name="busqueda">
                </form>
            </div>