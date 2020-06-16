<!DOCTYPE html>
<html>
<head>
	<title>form inserimento</title>
</head>
<body>

	<h3>PAGINA INSERIMENTO QUERY</h3>

	<form action="01q.php" method="POST">			

		<h6>stampa autista con data nascita minore di...</h6>
		<input type="text" name="data_inserita">		

		<br><br>
		<input type="submit" name="stampa_minore_data_nascita" value="stampa elenco">

	</form>


	<?php
		include '01q.php';
	?>

</body>
</html>