<?php
	$dbh = new mysqli("localhost", "DbUser", "abc123", "databas");
	
	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}
?>