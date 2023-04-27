<?php
$pagoD = readline("Pago diario");
$diasT = readline("Número de días trabajados");
$salario = $pagoD * $diasT;
$pension = ($salario * 10) / 100;
$salud = ($salario * 15) /100;
$salarioF = $salario - $pension - $salud;
echo "El salario es de: $salario";
echo "El concepto de pensión es de: $pension";
echo "El concepto de salud es de: $salud";
echo "El salario final es de: $salarioF";
?>