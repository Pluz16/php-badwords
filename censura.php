<!DOCTYPE html>
<html>
<head>
	<title>Censura parola</title>
</head>
<body>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$paragrafo = $_POST["paragrafo"];
			$parola = $_POST["parola"];

			echo "<p>Paragrafo originale:</p>";
			echo "<p>" . $paragrafo . "</p>";
			echo "<p>Lunghezza paragrafo originale: " . strlen($paragrafo) . "</p>";

			$paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);

			echo "<p>Paragrafo censurato:</p>";
			echo "<p>" . $paragrafo_censurato . "</p>";
			echo "<p>Lunghezza paragrafo censurato: " . strlen($paragrafo_censurato) . "</p>";
		}
	?>
</body>
</html>