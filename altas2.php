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

//conexion con la base de datos:
//$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
    $resumen = "<table><thead>
                <tr>
                    <th>Matr&iacute;cula</th>
                    <th>Modelo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
                </thead>";
    $resumen.= "<tbody><tr>"
            . "<td>".$_POST["Matricula"]."</td>"
            . "<td>".$_POST["Modelo"]."</td>"
            . "<td>".$_POST["Nombre"]."</td>"
            . "<td>".$_POST["Apellidos"]."</td>"
            . "</tr></tbody></table>";
    echo($resumen);        

    $insert="INSERT INTO taxis VALUES (";
    $insert.="'".$_POST["Matricula"]."'".",";
    $insert.="'".$_POST["Modelo"]."'".",";
    $insert.="'".$_POST["Nombre"]."'".",";
    $insert.="'".$_POST["Apellidos"]."'".",";
    $insert.= 0;
    $insert.=")";
             
    $exec= mysqli_query($conexion, $insert);
    if($exec){
        echo("<p>taxi a&ntilde;adido</p>");
    }
    else{
        echo("<p>Se ha producido un error</p>");
    }
?>
</body>
</html>
