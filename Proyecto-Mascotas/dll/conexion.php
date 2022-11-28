<?php

	$conexion= new mysqli("127.0.0.1","root","","petsdb");
	if ($conexion->connect_errno) {
		echo "Hay problemas de conexion";
	}
?>
