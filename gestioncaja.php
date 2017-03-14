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
    </head>
    <body>
<?php
$dia=$_POST["dia"];
//$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
$sel="SELECT * FROM servicio WHERE Dia="."'".$dia."'";

$exec= mysqli_query($conexion, $sel);
//Para la suma de importes:
$sel2="SELECT SUM(Importe) AS value_sum FROM servicio WHERE Dia="."'".$dia."'";
$result = mysqli_query($conexion,$sel2);
$row = mysqli_fetch_assoc($result);
$sum = $row['value_sum'];
//$result = mysql_query('SELECT SUM(value) AS value_sum FROM codes');
//$row = mysql_fetch_assoc($result);
//$sum = $row['value_sum'];     
?>
        <table id="gestion">
            <thead>
                <tr>
                    <th>N&uacute;mero de Servicio</th>
                    <th>Nombre del Cliente</th>
                    <th>Apellidos del Cliente</th>
                    <th>Tel&eacute;fono del Cliente</th>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Matr&iacute;cula</th>
                    <th>Importe</th>
                </tr>
            </thead>
            <tbody>
<?php
while($registro= mysqli_fetch_array($exec)){
?>
                <tr>
                    <td><?php echo($registro[0]);?></td><!-- número de servicio-->
                    <td><?php echo($registro[1]);?></td><!--Nombre cliente-->
                    <td><?php echo($registro[2]);?></td><!--Apellidos cliente-->
                    <td><?php echo($registro[3]);?></td><!--Teléfono del cliente-->
                    <td><?php echo($registro[4]);?></td><!--Dia-->
                    <td><?php echo($registro[5]);?></td><!--Hora-->
                    <td><?php echo($registro[7]);?></td><!--Matricula-->
                    <td><?php echo($registro[6]);?></td><!--Importe-->
                </tr>
<?php } ?>
            </tbody>
        </table>
        <p>El total facturado es:&nbsp;<?php echo($sum);?>&nbsp;&euro;</p>
</body>
</html>


