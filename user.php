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
			require_once("funkcje.php");
			echo "Zalogowano!"."<br>";

			$imgSource="";
			if(isSet($_SESSION["displayFile"])){
				$imgSource = $_SESSION["displayFile"];
			}

			if( isSet($_SESSION["zalogowany"]) && ($_SESSION["zalogowany"] == 1) ){ 
				$userData = $_SESSION["zalogowanyImie"];
				echo "Użytkownik: $userData"."<br>";
				echo "<a href='index.php'>Wróć</a>"."<br>";
			} else {
				header("Location: index.php");
			}	
		?>
		<br>
		<form action="index.php" method="post">
			<fieldset>
			<legend>Wylogowywanie</legend>
			<input type="submit" name="logoutForm" value="Wyloguj">
			</fieldset>
		</form>
		<br>
		<form action= "upload.php" method="post" enctype="multipart/form-data">
				<fieldset>
				<legend>Formularz przesyłu zdjęć</legend>
				<input type="file" id="fileID" name="fileInput">
				<br><br>
				<input type="submit" name="submitFile" value="Prześlij na serwer">
				</fieldset>
		</form>
		<br>
		<img src="<?= $imgSource ?>" alt="Załadowane zdjecie">
	</body>
</html>