<?php
	$fi=fopen("GATOLILA.txt, "a")
	or die("Error: archivo no creado");

	fwrite($fi,"Datos: ");
	fwrite($fi,"\n");
	fwrite($fi, $_POST["nombre"]);
	fwrite($fi,"\n");
	fwrite($fi, $_POST["comentario"]);
	fwrite($fi,"\n");
	fwrite($fi,"---------------------------- \n\n");
	fclose($fi);

?>