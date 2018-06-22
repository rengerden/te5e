<?php
include('mysql.php');
  $id_web = intval($_GET["id"]);
//$id_web = $_GET["id"];
$conexion = mysql_connect($host, $user, $pass) or die(mysql_error());	
mysql_select_db($base) or die( mysql_error());
$sql = "select user_id, user_name, user_lastname, user_email, user_psw, user_privilegies, user_age, user_rate from  users_app where user_id = $id_web  ";
$res = mysql_query($sql);
$ren = mysql_fetch_array($res);
			$id = $ren["user_id"];
			$nombre = $ren["user_name"];
			$apellido = $ren["user_lastname"];
			$correo = $ren["user_email"];
			$contraseña =$ren["user_psw"];
			$privilegios =$ren["user_privilegies"];
			$edad = $ren["user_age"];
			$calificacion =$ren["user_rate"];

			
			

echo "<div> Detalles de Personas </div><br/><br/>";
echo "<div> Id: $id </div>";
echo "<div> Nombre:  $nombre </div>";
echo "<div> Apellido: $apellido </div>";
echo "<div> Correo Electronico: $correo </div>";
echo "<div> Password: $contraseña </div>";
echo "<div> Privilegios: $privilegios </div>";
echo "<div> Edad: $edad </div>";
echo "<div> Calificacion: $calificacion</div>";
echo "<br/><br/><br/>";
echo '<a href="listadatos.php">Regresar Listado de Personas</a>';
?>