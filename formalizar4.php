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
    //1:-para modificar la tabla taxis a ocupado en la matricula dada:
    foreach($_POST["ocupar"] as $valor){
                //si se ha pulsado el botón submit tiene que aparecer un formulario
                //para rellenar los datos del cliente en la tabla servicio:
            ?>    
                    <form action="formalizar5.php" method="post" id="formalizar_segundo_formulario">
                        <table>
                            <thead>
                            <tr>
                                <th>N&uacute;mero de Servicio</th>
                                <th>Nombre del Cliente</th>
                                <th>Apellidos del Cliente</th>
                                <th>Tel&eacute;fono del Cliente</th>
                                <th>Dia</th>
                                <th>Hora</th>
                                <th>Matr&iacute;cula</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php
                            $conexion= mysqli_connect("127.0.0.1","root","localtestdeveloper","TaxiCorpLCB");
                            //$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
                            //coger el último número de servicio
                            //si con un fetch array te cogia el ultimo numero de matricula, aqui tiene que valer tb
                            //tb le pones que un codnicional que si es NULL entonces que le ponga 0
                            //$sel="SELECT * FROM servicio";
                            $sel="SELECT MAX(Numero_servicio) AS Numero_Servicio FROM servicio";
                            $exec0= mysqli_query($conexion, $sel);
                            //$cont=0;
                            //SELECT MAX(article) AS article FROM shop;
                            
                            while($registro= mysqli_fetch_array($exec0)){
                                //echo("registro[0]: ".$registro[0]."<br>");
                                $cont = $registro[0];
                                $cont=$cont+1;
                                //echo("ahora suma el contador :".$cont."<br>");
                                
//                                if(!mysqli_fetch_object($exec0)){
//                                $cont=1;
//                                }
                            // } //final del while de la linea 95
                            ?>
                                <!-- aqui se genera un número de forma automática no modificable: -->
                                <td>
                            <input class="boton" type="text" size="20" name="Numero_servicio" readonly value="<?php echo($cont); } ?>"></td>
                             
                                <td><input type="text" size="20" name="Nombre_cliente"></td>
                                <td><input type="text" size="40" name="Apellidos_cliente"></td>
                                <td><input type="text" size="20" name="Telefono"></td><!-- controlar para que sea numérico-->
                                <td><!-- aqui la fecha de forma automática y modificable-->
                                   <?php date_default_timezone_set('Europe/Madrid');?>
                                   <input class="boton" type="text" size="10" name="Dia" value="<?php echo(date("Y-m-d"));?>">          
                                </td>
                                <td><!-- aqui la hora de forma automática y modificable-->
                                   <input class="boton" type="text" size="10" name="Hora" value="<?php echo(date("G:i"));?>">
                                </td>
                                <td>
                                    <input class="boton" type="text" size="10" name="Matricula[]" value="<?php echo($valor);?>" readonly>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                         <input type="submit" class="boton" value="Ocupar veh&iacute;culos" name="formalizar2">
                    </form>
            <?php     

    } //fin del foreach
?>
    </body>
</html>

