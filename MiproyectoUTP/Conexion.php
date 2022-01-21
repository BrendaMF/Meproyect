<?php
	
		$con = mysqli_connect("localhost","root","","jsmusic");
		if (mysqli_connect_errno()) {
			echo "no se puede conectar a la bd" . mysqli_connect_errno();
		}
		$nombre = mysqli_real_escape_string($con, $_POST["Nombre"]); 
		$ap = mysqli_real_escape_string($con, $_POST["Ap_Paterno"]);
		$am = mysqli_real_escape_string($con, $_POST["Ap_Materno"]);
		$edad = mysqli_real_escape_string($con, $_POST["Edad"]);
		$Email = mysqli_real_escape_string($con, $_POST["Email"]);
		$password = mysqli_real_escape_string($con, $_POST["password"]);
		$sql = "INSERT INTO clientes (Nombre,Ap_Paterno,Ap_Materno,Edad,Email,password) values ('$nombre','$ap','$am','$edad','$Email','$password')";

		if (!mysqli_query($con, $sql)) {
			die('Error:' . mysqli_error($con));
			# code...
		}else{
			print"<script lenguage = 'JavaScript'>
		alert('Registro Exitoso:D');
		window.location.href='index.php';
		</script>
		";
		}

?>