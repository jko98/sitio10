<?php
$carpeta="imagen";
copy($_FILES['file'] ['tmp_name'],$carpeta."/".$_FILES['file'] ['name']);

?>