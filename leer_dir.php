<?php
$carpeta= opendir("imagen");

while (($file_name= readdir($carpeta)) !== false){
	if ($file_name!= "." && $file_name!="..") {
		
	
	echo ("Nombre de archivo: <a href=imagen/".$file_name."><img width=110px height=110px style='border-radius:50%'; border='1px' src=imagen/" . $file_name.">$file_name</a>");
	echo "<br>";
	}
}

closedir($carpeta);
?>