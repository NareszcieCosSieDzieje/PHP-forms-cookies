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
			require 'funkcje.php';

			if(isSet($_POST["logoutForm"])){
				$_SESSION["zalogowanyImie"] = "";
				$_SESSION["zalogowany"] = 0;
			}
			echo "<h1>Nasz system</h1>";
		?>
		<br>
		<form action="logowanie.php" method="post">
			<fieldset>	
			<legend>Dane użytkownika:</legend>
			<label for="logID">Login:</label>
			<input type="text" id="logID" name="loginInput">
			<br><br>
			<label for="passID">Hasło:</label>
			<input type="text" id="passID" name="passwordInput">
			<br><br>
			<input type="submit" id="subID" name="submitForm" value="Zaloguj">
			</fieldset>
		</form>
		<br>
		<a href="user.php"> Panel użytkownika</a>
		<br><br>
		<form action="cookie.php" method="get">
			<fieldset>
			<legend>Formularz cookie:</legend>
			<label for="numID">Czas życia cookie (s)</label>>
			<input type="number" id="numID" name="czas">
			<br><br>
			<input type="submit" name="utworzCookie">
			</fieldset>
		</form>
		<br>
		<?php 
			if(isSet($_COOKIE["ciacho"])){
				$cookieVal = $_COOKIE["ciacho"];
				echo "Wartość ciasteczka = $cookieVal";
			}
		?>
	</body>
</html>