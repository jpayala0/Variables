//Solicitar al usuario una distancia en metros y transformar a km., cm. o mm. 
<?php
$num = readline("Ingrese la distancia en metros");
$km = $num * 0.001;
$cm = $num * 100;
$mm = $num * 1000;
echo "La distancia en kilómetros es de: $km";
echo "La distancia en centímetros es de: $cm";
echo "La distancia en milímetros es de: $mm";
?>