//Solicitar tiempo en segundos y transformar a horas y minutos.//
<?php
$segundos = readline("Ingrese el  tiempo en segundos");
$horas = ($segundos / 3600);
$minutos = ($segundos / 60);
echo "El tiempo en horas es de: $horas";
echo "El tiempo en minutos es de: $minutos";
?>