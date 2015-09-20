<?php
include('mysql.php');

//mysql_select_db($base) or die( mysql_error());


try {
	$conexion = mysqli_connect($host_db, $user_db, $pass_db, $base_db) or die(mysqli_error());	
	if (!$conexion) {
				echo "";
							


			}else {
				echo "";

				}
} catch (Exception $e) {
			echo "Error ".$e;
	
}
?>