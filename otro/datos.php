<?php
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$iva = $_POST['iva'];
//$total = $cantidad * $precio;

$subtotal = $cantidad * $precio;
$iva = ($subtotal * $iva)/100;
$total = $subtotal + $iva;

echo "Producto:  " . $producto . "</br>" .  "Precio: " . $precio  . "</br>" .  "Cantidad: " . $cantidad . "</br>" .  "Total: " . $total;

//print_r($_REQUEST);

//http://aprenderaprogramar.com/index.php?option=com_content&view=article&id=580:post-php-procesar-datos-de-un-formulario-html-ejercicios-resueltos-y-ejemplos-sencillos-cu00834b-&catid=70:tutorial-basico-programador-web-php-desde-cero&Itemid=193
//http://es.scribd.com/doc/141137640/Ejercicios-Resueltos#scribd
/*function iva($sin_iva) { 
$iva = 17; 
$con_iva = $sin_iva + ($iva*($sin_iva/100)); 
$con_iva = round($con_iva, 2); 
return $con_iva; } 
$sin_iva = 150; 
echo iva($sin_iva); 
?> 
Cambia el valor del iva por el tuyo.


<?php
$porcentaje = (30 * 125) / 100;
echo 'El porcentaje 30% de 125 es: '.$porcentaje; 
?>
*/
?>
 
