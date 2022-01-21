<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM clientes WHERE id_cliente=$id_cliente";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id_cliente=$row[0];
		    	$Nombre=$row[1];
		    	$Ap_Materno=$row[2];
		    	$Ap_Paterno=$row[3];
		    	$Edad=$row[4];
		    	$Email=$row[5];
		    	$password=$row[6];
		    	$Tipo=$row[7];
		    	$pasadmin=$row[8];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				id_cliente<br><input type="text" name="id_cliente" value= "<?php echo $id_cliente ?>" readonly="readonly"><br>
				Nombre<br> <input type="text" name="Nombre" value="<?php echo $Nombre?>"><br>
				Ap_Materno<br> <input type="text" name="Ap_Materno" value="<?php echo $Ap_Materno?>"><br>
				Ap_Paterno<br> <input type="text" name="Ap_Paterno" value="<?php echo $Ap_Paterno?>"><br>
				Edad<br> <input type="text" name="Edad" value="<?php echo $Edad?>"><br>
				Email<br> <input type="text" name="Email" value="<?php echo $Email?>"><br>
				password<br> <input type="text" name="Pssword" value="<?php echo $Pssword?>"><br>
				Tipo<br> <input type="text" name="Tipo" value="<?php echo $Tipo?>"><br>
				pasadmin<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>