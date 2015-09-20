<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
				<?php
				ob_start();
				header('refresh: 0; url = ../index.html');
				
				ob_end_flush();
				?>
</body>
</html>