<?php 

		
		
		$user_app   = $_POST['usernamesignup'];
		$lastname = $_POST['userlastnamesignup'];
		$email  = $_POST['emailsignup'];
		$pass_app   = $_POST['passwordsignup'];
		$age    = $_POST['datesignup'];

		validarUser($user_app,$email);
		//conectar($user_app,$email,$pass_app,$lastname,$age);



		if (mysqli_connect_errno()) {
    		printf("Falló la conexión: %s\n", mysqli_connect_error());
   			 exit();
		}

		function validarUser($user_app, $mail)
		{
			require("conexion.php");

			$query_user = "SELECT user_name  from users_app where user_name = '$user_app' ";
			echo "<br> $query_user<br>";
			$query_mail = "SELECT user_email from users_app where  user_email = '$mail'";
			echo "<br> $query_mail<br>";
			if ($result = mysqli_query($conexion,$query_user)) 
			{
					 if(1== mysqli_num_rows($result))
					 {
					 	$list = mysqli_fetch_array($result);

					 	$usuario = $list[0];
					 	if(!$usuario == NULL){
					 		echo "usuario registrado";
					 	}
			if($result2 = mysqli_query($conexion,$query_mail))
			{
				if(1== mysqli_num_rows($result2))
					 {
					 	$list2 = mysqli_fetch_array($result2);

					 	$correo = $list[0];
					 	if(!$correo == NULL){
					 		echo "correo registrado";
					 	}
			}

					 }
			}
		}

			

		
			
				
			
		}


		function conectar($user_app,$email,$pass_app,$lastname){
         require("conexion.php");
         $query = "INSERT INTO `mcm5e`.`users_app` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_psw`, `user_privilegies`, `user_age`, `user_rate`)
          VALUES (NULL, '$user_app', '$lastname', '$email', md5('$pass_app'), '1', '0', '0');";

          if (!$resultado = mysqli_query($conexion, $query)) {
          		
          	echo "mal";
          }else{
          	echo "good";
          }



		}



?>