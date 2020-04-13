<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset = 'UFT-8'/>
	</head>
	<body>
		<?php
			echo "Cookies!";

			if(isSet($_GET["utworzCookie"])){
				$tim =	$_GET['czas'];
				setcookie("ciacho", $tim, time()+ (86400*30), "/");
				echo "<br>Ciasteczko ustawione.";
			}
		?>
		<br>
		<a href="index.php">Wróć</a>
	</body>
</html>