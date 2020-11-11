<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertando registro</title>
</head>

<body>
	<?php
	require_once 'connection.php';

	if ((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['email']) && $_POST['email'] != "")
		&& (isset($_POST['message']) && $_POST['message'] != "")
	) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			$query = "INSERT INTO contacts (name, email, message) 
				VALUES 
				('$name', '$email', '$message')"; // Query de SQL

			$results = $connection->query($query);
			if (!$results) { // Revisamos errores
				die($connection->error);
			}

			echo "<br> Mensaje enviado correctamente.";
			echo "<br> En 3 segundos volverás a la página anterior.";
			mysqli_close($connection);
			header("refresh:3;url=../pages/contact.php");
	}

	?>

</body>

</html>