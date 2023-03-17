<!DOCTYPE html>
<html>
<head>
	<title>Form per censura parola</title>
</head>
<body>
	<form action="index.php" method="post">
		<label for="paragrafo">Paragrafo:</label><br>
		<textarea name="paragrafo" id="paragrafo" cols="35" rows="13"></textarea><br>
		<label for="parola">Quale parola vuoi censurare?</label><br>
		<input type="text" name="parola" id="parola"><br>
		<input type="submit" value="Censura">
	</form>
</body>
</html>
