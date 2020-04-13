<?php

	session_start();
	//error_reporting(E_ERROR | E_PARSE);

	if(isSet($_POST['submitFile'])){
		$currentDir = getcwd();
		$uploadDirectory = "/zdjeciaUzytkownikow/";
		$fileName = $_FILES['fileInput']['name'];
		$fileSize = $_FILES['fileInput']['size'];
		$fileTmpName = $_FILES['fileInput']['tmp_name'];
		$fileType = $_FILES['fileInput']['type'];
		if($fileName != "" and 
			( ($fileType == 'image/png') or ($fileType == 'image/jpeg') or ($fileType == 'image/PNG') ($fileType == 'image/JPEG')
		    )){
			$uploadPath = $currentDir.$uploadDirectory.$fileName;
			$_SESSION["displayFile"] = $uploadDirectory.$fileName;
			if(move_uploaded_file($fileTmpName, $uploadPath)){
				echo "Zdjęcie zostało załadowane na serwer FTP";
			}
		}		
	}
	header("Location: user.php");
?>