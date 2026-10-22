<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$valor = 0;
$suma = 0;
while ( $valor < count($datos) && $datos[$valor] != 0){
    $suma += $datos[$valor];
    $valor++;

}
echo "<p>Se han sumado $valor números, dando como resultado un total de $suma </p>";
?>

<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$i = 0;
$a = 0;
?>
<table border="solid 1px">
<?php
  for ($i = 1; $i <= $datos[0]; $i++) {
?>
    <tr>
<?php
  for ($a = 1; $a <= $datos[1]; $a++) {
?>
        <td></td>
<?php
}
?>
    </tr>
<?php
}
?>
</table>