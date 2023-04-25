<?php
$archivo= "algo.txt";
$gestor= fopen($archivo, "r");
$contenido=fread($gestor, 100);
echo $contenido;
fclose($gestor);
?>