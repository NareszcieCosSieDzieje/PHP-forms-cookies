<?php
	
	session_start();

	require 'funkcje.php';

	$login="";
	$password="";
	if(isSet($_POST["submitForm"])){
		if(isSet($_POST["loginInput"])){
			$login = test_input($_POST["loginInput"]);
			//echo "Login wprowadzony: $login"."<br>"; 
		}
		if(isSet($_POST["passwordInput"])){
			$password = test_input($_POST["passwordInput"]);
			//echo "Hasło wprowadzone: $password"."<br>"; 
		}
	}
	$loggedIn=false;
	foreach($osoby as $o){
		if( ($o->login == $login) && ($o->haslo == $password) ){
			$loggedIn=true;
		} 
	}
	if($loggedIn){
		$_SESSION["zalogowanyImie"] = $login." ".$password;
		$_SESSION["zalogowany"] = 1;
		header("Location: user.php");
	} else {
		$_SESSION["zalogowanyImie"] = "";
		$_SESSION["zalogowany"] = 0;
		header("Location: index.php");
	}
?>