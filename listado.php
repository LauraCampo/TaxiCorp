<?php header('Content-type: text/html; charset=iso-8859-1');?>
<?php
$html="Flota de veh&iacute;culos actual:";
echo($html);
//conexion con la base de datos:
//$conexion= mysqli_connect("127.0.0.1","root","333ventinueve!","TaxiCorpLCB");
$conexion= mysqli_connect("localhost","cursoajax","123456","TaxiCorpLCB");
$sel="SELECT * FROM taxis";
$exec= mysqli_query($conexion, $sel);
?>
        <table id="flota">
            <thead>
                <tr>
                    <th>Matr&iacute;cula</th>
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
                <tr>
                    <td><?php echo($registro[0]);?></td>
                    <td><?php echo($registro[1]);?></td>
                    <td><?php echo($registro[2]);?></td>
                    <td><?php echo($registro[3]);?></td>
                    <td><?php echo($registro[4]);?></td>
                </tr>
<?php } ?>
            </tbody>
        </table>

