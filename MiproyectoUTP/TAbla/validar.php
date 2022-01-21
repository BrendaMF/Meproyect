
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

	$sql=mysqli_query($mysqli,"SELECT * FROM clientes WHERE Nombre='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pasadmin']){
			$_SESSION['id_cliente']=$f['id_cliente'];
			$_SESSION['Nombre']=$f['Nombre'];
			$_SESSION['Tipo']=$f['Tipo'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='PROY.html'</script>";
			//header("Location:PROY.html");
		}
	}

	$sql2=mysqli_query($mysqli,"SELECT * FROM clientes WHERE Nombre='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("BIENVENIDO Cliente")</script> ';
			echo "<script>location.href='PROY.html'</script>";
			//header("Location: PROY.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='Registro.html'</script>";	

	}




?>