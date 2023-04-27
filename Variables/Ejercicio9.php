<?php
$valorU = readline("Ingrese el valor del producto");
$cant = readline("Ingrese la cantidad de los productos");
$valorF = $valorU * $cant;
$iva = ($valorF * 16) / 100;
$valorT = $valorF + $iva;
echo "El  valor total de la compra es de: $valorF";
echo "El iba de la compra es de: $iva";
echo "El valor total de la compra es de: $valorT";
?>