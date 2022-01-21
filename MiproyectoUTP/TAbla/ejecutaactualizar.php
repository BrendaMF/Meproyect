<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update clientes set Nombre='$Nombre',Ap_Materno='$Ap_Materno',Ap_Paterno='$Ap_Paterno',Edad='$Edad',Email='$Email', password='$password',Tipo='$Tipo', pasadmin='$pasadmin' where id_cliente='$id_cliente'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ss.php");
		
		echo "<script>location.href='http://localhost/TAbla/ss.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='http://localhost/TAbla/ss.php'</script>";

		
	}
?>