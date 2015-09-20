<?php
include('mysql.php');
$conexion = mysql_connect($host, $user, $pass) or die(mysql_error());	
mysql_select_db($base) or die( mysql_error());
$sql = "select user_id, user_name, user_lastname, user_email, user_psw, user_privilegies, user_age, user_rate from users_app order by user_id asc";
$res = mysql_query($sql);
echo "<div> Listado de Personas </div><br/><br/>";
echo '<table border="2" WIDTH="400"  >';
	echo '<tr><td>id</td><td>Nombre</td><td>detalles</td></tr>';
	while($ren = mysql_fetch_array($res))
		{
			$id = $ren["user_id"];
			$nombre = $ren["user_name"];
			$apellido = $ren["user_lastname"];
			$correo = $ren["user_email"];
			$contraseña =$ren["user_psw"];
			$privilegios =$ren["user_privilegies"];
			$edad = $ren["user_age"];
			$calificacion =$ren["user_rate"];
			echo "<tr>";
				echo "<td> $id  </td>";
				echo "<td> $nombre </td>";
				echo "<td> $apellido </td>";
				echo "<td> $correo </td>";
				echo "<td> $contraseña </td>";
				echo "<td> $privilegios </td>";
				echo "<td> $edad </td>";
				echo "<td> $calificacion</td>";
				echo '<td> <a href="detalle.php?id='.$id.'"> Ver Detalle </td>';		
			echo "</tr>";
		}
echo '</table>';
echo '<br/><br/><br/>';
echo '<a href="index.html">Regresar Inicio Web</a>';
?>