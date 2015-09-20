<?php
		
		include("conexion.php");
		
		$usuario   = $_POST['user'];
		$password  = $_POST['pass'];
		iniciaSes($usuario,$password);
			
	if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
		}
		
	 function iniciaSes($usuario,$password){
	 	require("conexion.php");
			$consulta = "SELECT user_name, user_privilegies, user_id 
							FROM `users_app` WHERE user_name = '$usuario' 
							and user_psw = md5('$password')";
		if ($resultado = mysqli_query($conexion, $consulta)) {
				echo "$consulta";
		    if(1== mysqli_num_rows($resultado)){
		    	$list= mysqli_fetch_array($resultado);

		    	$name = $list[0];
		    	$privilegies = $list[1];
		    	echo "$privilegies";
		    	switch ($privilegies) {
		    		case '1':
		    			header("location: ubication.html");
		    			break;
		    		default:
		    			header("location: index.html");
		    			break;
		    	}

		    }else{
		    		header("location: errorUser.php");

		    }
		    

		}else{
			header("location: errorUser.php");
		}

	}

	

	

/* cerrar la conexión */
mysqli_close($conexion);





?>