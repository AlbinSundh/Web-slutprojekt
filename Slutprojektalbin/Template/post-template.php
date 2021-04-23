<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Kebabkungen</title>
		<link rel="stylesheet" href="css/stilmall.css">
		<link rel="icon" type="image/png" href="Bilder/favicon-32x32.png"/>
	</head>
	<body>
		<?php
			require "menu.php";
		?>
	
	<form>
		<p><label for="title">Titel</label>
		<input> type="text" id="title"></p>
		<p><table for="text">BrödText:</label>
		<textarea type="text" row="5" cols="50" id="text" name="text"></p>
	</form>
	
		<?php
			require "footer.php"
		?>
	</body>
</html>