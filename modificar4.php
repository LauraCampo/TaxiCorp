<?php header('Content-type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- enlace a los estilos -->
        <link type="text/css" media="screen" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" />
        <!-- enlace a la versión de jquery ui-->
        <script   src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </head>
    <body> 
<?php
//if(isset($_POST["busqueda"])){      
//aqui busca el numero de matricula:
    //conexion con la base de datos:
    //$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
    $conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
    $sel="SELECT * FROM taxis WHERE Matricula=".$_POST["Matricula"];      
    $exec= mysqli_query($conexion, $sel);
//aqui muestra los datos: 
 ?>
        <form action="modificar5.php" method="post" id="form_flota_modificar">
        <h5>Realiza los cambios que desees excepto en el n&uacute;mero de Matr&iacute;cula</h5>    
            <table id="flota">
                    <thead>
                        <tr>
                            <th>Matr&iacute;cula</th><!-- este se seguirá viendo-->
                            <th>Modelo</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Ocupado</th>
                        </tr>
                    </thead>
                    <tbody>          
        <?php
        while($registro= mysqli_fetch_array($exec)){
        ?>
                        <!-- aqui hay que crear un formulario, que se envia a update-->               
                        <tr>
                            <td><!--Matricula-->
                                <!--aqui poner un input pero no modificable para enviar a la pag. siguiente-->
                                <input type="text" class="boton" name="Matricula" value="<?php echo($registro[0]);?>" readonly>             
                            </td>
                            <td><!--Modelo-->
                                <input type="text" name="Modelo" value="<?php echo($registro[1]);?>">
                            </td>
                            <td><!--Nombre-->
                                <input type="text" name="Nombre" value="<?php echo($registro[2]);?>">
                            </td>
                            <td><!--Apellidos-->
                                <input type="text" name="Apellidos" value="<?php echo($registro[3]);?>">
                            </td>
                            <td><!--Ocupado--><!-- Este hay que adaptarlo a booleano-->
                                <input type="text" name="Ocupado" value="<?php echo($registro[4]);?>">
                            </td>
                        </tr>                 
        <?php } ?>
                    </tbody>
                </table>
                <input type="submit" class="boton" value="Modificar Datos" name="modificar">
        </form>
<!-- control de errores -->
<?php
    if($exec){
        //echo("<div class='mensajes'><a class='boton' href='index.php'>Volver al inicio</a></div>");
    }
    else{
        echo("<div class='mensajes'><p>Se ha producido un error.</p>");
        //echo("<div class='boton'><a href='index.php' id='volver'>Volver al inicio</a></div></div>");
    }
//}
?>
</body>
</html>


