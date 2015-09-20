<?php

function validarUser($user, $mail){
			require("conexion.php");

			$query_user = "SELECT user_name  from users_app where user_name = '$user' ";
			$query_mail = "SELECT user_email from users_app where  user_email = '$mail'";
			if($resultado =  mysqli_query($conexion,$query_user)){
				echo "Usuario ya registrado";
				return false;
				header('refresh: 1; url = index.html');
			if($result = mysqli_query($conexion,$query_mail)){
				echo "<br>correo electronico ya registrado";
				return false;
				header('refresh: 1; url = index.html');
			}else{
				conectar($user,$email,$pass,$lastname,$age);
				return true;
				header("location: index.html");
			}
		}



?>