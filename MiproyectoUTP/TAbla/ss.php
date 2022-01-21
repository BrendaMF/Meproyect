<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ARTICULOS EN EXISTENCIA</title>
    <body data-offset="40" background="http://www.tuexpaxxio.com/imagenes_negocios/Steren-01-2012.jpg">

<!--//AQUIEMPIEXZA -->
<h2> ARTICULOS EN EXISTENCIA </h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>ARTICULOS EN EXISTENCIA</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM productos");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

			    	echo "<table border='5'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>id_Articulos</td>";
						echo "<td>Nombre_Articulos</td>";
						echo "<td>Departamento</td>";
						echo "<td>Existencia</td>";
						echo "<td>Precio$</td>";
						
					echo "</tr>";
			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";	
				    	echo "<td><a href='ac.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='ss.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
				    	
						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM articulos WHERE id_Articulos=$id_Articulos";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='ss.php'</script>";
					}

			?>


			
			<footer class="footer">

<hr class="soften"/>
<p> <br/><br/></p>
 </footer>