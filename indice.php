
<html>
<head><title>Indice</title></head>
<body>
<?php
require("conexionbase.php");

	$resultado= mysqli_query($link, "SELECT * FROM productos");
	echo "<fieldset><legent><font size='5' color='blue'>Poductos</font></legent>";
	while($row = mysqli_fetch_array($resultado)){
		
		echo "<table border='1'>";
		echo "<tr>";
		echo 	"<td><font size='3' face='Arial'>ID</font></td>";
		echo	"<td><font size='3' face='Arial'>Clave</font></td>";
		echo	"<td><font size='3' face='Arial'>Nombre</font></td>";
		echo	"<td><font size='3' face='Arial'>Precio $</font></td>";
		echo	"<td><font size='3' face='Arial'>Descripcion</font></td>";
		echo	"<td><font size='3' face='Arial'>Opciones</font></td>";
		echo "</tr>";
		

		while($row = mysqli_fetch_array($resultado)){

		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["clave"]."</td>";	
		echo "<td>".$row["nombre"]."</td>";
		echo "<td>".$row["precio"]."</td>";
		echo "<td>".$row["descripcion"]."</td>";
		echo "<td> </td>";
		echo"<tr>";
		}
		echo "</table>";
		echo "</fieldset>";
	}	
	 mysqli_close($link);
?>
	<input type="button" onclick=" location.href='http://localhost/formulario.php'" value="Nuevo" />
</body>
</html>