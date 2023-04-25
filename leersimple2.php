<?php
$mensaje=$_POST['mensaje'];
$mensaje.="<br>";
$mensaje.="<hr>";
$mensaje.="<br>";
$mensaje.=date("Y-m-d");
$mensaje.="<br>";
$fp= fopen('data.htm', 'a'); //append
fwrite($fp, $mensaje);
fclose($fp);
header("location:data.htm")
?>