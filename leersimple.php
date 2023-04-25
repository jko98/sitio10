<?php
$fp="archivo.htm";
$gestor=fopen($fp, "r");
fpassthru($gestor);
fclose($gestor);
?>