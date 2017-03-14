<?php header('Content-type: text/html; charset=iso-8859-1');?>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
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
<div id="finalizar_primer_formulario">
                <?php
                    // la primera vez que carga la página: 
                    // formulario a partir de datos servicios
                    // + introducir importe
                    // + botón finalizar
                    $html="Veh&iacute;culos con carrera en curso (ocupados con importe de carrera cero):";
                    echo($html);
                    //conexion con la base de datos:
                    //$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
                    $conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
                    //Muestra de la tabla servicios el importe 0 :
                    $sel="SELECT * FROM servicio WHERE Importe=0";
                    $exec= mysqli_query($conexion, $sel);
                ?>
                <form action="finalizar5.php" method="post">
                    <table id="flota">
                        <thead>
                            <tr>
                                <th>N&uacute;mero<br> de Servicio</th>
                                <th>Matr&iacute;cula</th>
                                <th>Nombre<br> cliente</th>
                                <th>Apellidos<br> cliente</th>
                                <th>Dia</th>
                                <th>Hora</th>
                                <th>Finalizar <br>Carrera<br>(liberar)</th>
                            </tr>
                        </thead>
                <?php
                    while($registro= mysqli_fetch_array($exec)){
                ?>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="boton" name="Numero_servicio" value="<?php echo($registro[0]);?>" readonly>
                            </td>
                            <td><!--Matricula-->
                                <!--aqui poner un input pero no modificable para enviar a la pag. siguiente-->
                                <input type="text" class="boton" name="Matricula" value="<?php echo($registro[7]);?>" readonly>
                            </td>
                            <td><?php echo($registro[1]);?></td><!--Nombre cliente-->
                            <td><?php echo($registro[2]);?></td><!--Apellidos cliente-->
                            <td><?php echo($registro[4]);?></td><!--Dia-->
                            <td><?php echo($registro[5]);?></td><!--Hora-->
                            <td>
                            <!-- ahora esto coge el numero de servicio que le doy al botón radio:-->
                            <?php echo("<input type='radio' name='liberar[]' value='".$registro[0]."'>");?>
                            </td> 
                        </tr>
                    </tbody>          
                <?php } //while
                ?>         
                </table> 
                    Importe Carrera(los decimales con punto):<input type="text" name="Importe">&euro;
                    <input type="submit" class="boton" value="Liberar veh&iacute;culo" name="finalizar">
                </form>
            </div>
    </body>
</html>