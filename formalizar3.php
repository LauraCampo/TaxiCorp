<?php header('Content-type: text/html; charset=iso-8859-1');?>
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
<div id="formalizar_primer_formulario">
                <?php
                    $html="Veh&iacute;culos libres (disponibles):";
                    echo($html);
                    //conexion con la base de datos:
                    $conexion= mysqli_connect("127.0.0.1","root","localtestdeveloper","TaxiCorpLCB");
                    //$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
                    //mostrar todos los taxis en los que Ocupado sea 0:
                    $sel="SELECT * FROM taxis WHERE Ocupado=0";
                    $exec= mysqli_query($conexion, $sel);
                    ?>
                        <form action="formalizar4.php" method="post">
                            <table id="flota">
                                <thead>
                                    <tr>
                                        <th>Matr&iacute;cula</th>
                                        <th>Modelo</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Iniciar Carrera(ocupar)</th>
                                    </tr>
                                </thead>
                                <tbody>
                <?php
                    while($registro= mysqli_fetch_array($exec)){
                ?>
                        <tr>
                            <td><!--Matricula-->
                                <!--aqui poner un input pero no modificable para enviar a la pag. siguiente-->
                                <input type="text" class="boton" name="Matricula[]" value="<?php echo($registro[0]);?>" readonly>
                            </td>
                            <td><?php echo($registro[1]);?></td><!--Modelo-->
                            <td><?php echo($registro[2]);?></td><!--Nombre-->
                            <td><?php echo($registro[3]);?></td><!--Apellidos-->
                            <td>
                                <!-- ahora esto coge la matricula que le doy al botón radio:-->
                                <?php echo("<input type='radio' name='ocupar[]' value='".$registro[0]."'>");?>
                            </td>
                        </tr>
                <?php } ?>
                               </tbody>
                            </table>
                            <input type="submit" class="boton" value="Ocupar veh&iacute;culos" name="formalizar">
                        </form>
            </div>
    </body>
</html>