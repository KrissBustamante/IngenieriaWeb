<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
	/*$var1=10;
	$var2="2";
	@$res=$var1+$var2;
	echo "<strong>hola mundo<br> :)</strong> ".$res;*/

	include("../dll/config.php");
	include("../dll/class_mysqli.php");
	$miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

	//extract($_POST);
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$correo=$_POST['correo'];

	$sql="insert into personal values('','$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";"insert into persona values('','$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";
	$resSql=$miconexion->consulta($sql);

	if ($resSql) {
		echo '<script>alert("Sus datos se regsitraron corretamente..");</script>';
		echo "<script>location.href='../'</script>";
	}else{
		echo "Error..  Problemas de sql";
	}

	

?>