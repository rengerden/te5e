<div>Registro Personal</div>
<form action="ingresar.php" method="post"  >
<div>Nombre Persona<input name="nombre" type="text" /></div>
<div>Edad: <input name="edad" type="text" /></div>
<div>Descripcion: <textarea name="descripcion" ></textarea> </div>
<div><input type="submit" value="Registrar" /> </div>
</form>

<?php
include('mysql.php');
$conexion = mysql_connect($host, $user, $pass) or die(mysql_error());	
mysql_select_db($base) or die( mysql_error());

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$descripcion = $_POST["descripcion"];
//echo "--$descripcion--";

if($nombre!='')
	{
		$sql = 
		"insert into personas
		( nombre, edad, descripcion)
		values
		('$nombre','$edad','$descripcion')";
		
		if(!mysql_query($sql))
			{
				echo "no se pudo insertar";
			}
		else
			{
				echo "Se Inserto Correctamente";	
			}
	}
?>
<a href="index.html">Regresar Inicio Web</a>