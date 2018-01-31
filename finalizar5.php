<?php header('Content-type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css" type="text/css">
    </head>
    <body>
<?php
// una vez se ha enviado el formulario:
//if(isset($_POST["finalizar"])){
        //conexion con la base de datos:
            $conexion= mysqli_connect("127.0.0.1","root","localtestdeveloper","TaxiCorpLCB");
            //aqui hace UPDATE del Importe tabla servicio: 
            $update="UPDATE servicio SET "
            . "Importe=".$_POST["Importe"]
            . " WHERE Numero_servicio=".$_POST["Numero_servicio"];
            $exec1= mysqli_query($conexion, $update);
        
            if($exec1){
                echo("<p>Carrera a&ntilde;adida en la tabla servicio para la matricula ".$_POST["Matricula"]."</p>");
            }
            else{
                echo($insert."<br>");
                echo("<p>Se ha producido un error al añadir la carrera.</p>");  
            }
            // aqui hace el UPDATE de Ocupado tabla taxis:
            
            $upd="UPDATE taxis SET "
                . "Ocupado=0"
                . " WHERE Matricula='".$_POST["Matricula"]."'"; 
            //le tengo que poner la matricula en forma de array que ha sido seleccionada con el checkbox
            $exec2= mysqli_query($conexion, $upd);      
            if($exec2){
                echo("<p>Modificaci&oacute;n realizada en la tabla taxis para la matricula ".$_POST["Matricula"]."</p>");
            }
            else{
                echo("<p>Se ha producido un error al modificar el estado de la matricula.</p>"); 
            }
//} 
?>               
    </body>
</html>

