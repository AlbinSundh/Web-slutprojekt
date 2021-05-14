<?php
	$dbh = new mysqli("localhost", "dbUser", "123qwe", "Databas");
	
	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}
?>