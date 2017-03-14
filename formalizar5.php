<?php header('Content-type: text/html; charset=iso-8859-1');?>
<?php
      //1:-para modificar la tabla taxis a ocupado en la matricula dada:
        foreach($_POST["Matricula"] as $valor){
            //si se ha marcado la casilla se hace el update:
            //
            //conexion con la base de datos:
            //$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
            $conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
            //aqui hace el insert:
            $insert="INSERT INTO servicio VALUES (";
            $insert.= $_POST["Numero_servicio"].",";
            $insert.="'".$_POST["Nombre_cliente"]."'".",";
            $insert.="'".$_POST["Apellidos_cliente"]."'".",";
            $insert.=$_POST["Telefono"].",";
            $insert.="'".$_POST["Dia"]."'".",";
            $insert.="'".$_POST["Hora"]."'".",";
            $insert.= 0 .",";
            $insert.="'".$valor."'";
            $insert.=")";
            $exec1= mysqli_query($conexion, $insert);
            if($exec1){
                echo("<p>Carrera a&ntilde;adida para la matr&iacute;cula ".$valor."</p>"); 
            }
            else{
                echo($insert."<br>");
                echo("<p>Se ha producido un error al a&ntilde;adir la carrera.</p>");  
            }
            // aqui hace el update:
            $upd="UPDATE taxis SET "
                . "Ocupado=1"
                . " WHERE Matricula='".$valor."'"; 
            //le tengo que poner la matricula en forma de array que ha sido seleccionada con el checkbox
            $exec2= mysqli_query($conexion, $upd);
            if($exec2){
                echo("<p>Modificaci&oacute;n realizada para la matr&iacute;cula ".$valor."</p>");
            }
            else{
                echo("<p>Se ha producido un error al modificar el estado de la matr&iacute;cula.</p>");
            }
        }
?>