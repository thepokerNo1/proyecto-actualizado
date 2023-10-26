<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "proyecto";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
			    die("Connection error: " . mysqli_connect_error());
			}

			// Check if the form is submitted
			if (isset($_POST['btnAgregar'])) {

			    // Get values from the form
			    $desayuno = $_POST['desayuno'];
			    $pColacion = $_POST['pColacion'];
			    $comida = $_POST['comida'];
			    $sColacion = $_POST['sColacion'];
			    $cena = $_POST['cena'];

			    // Perform the database operation
			    $stmt = $conn->prepare("INSERT INTO menu (desayuno, pColacion, comida, sColacion, cena) VALUES (?, ?, ?, ?, ?)");
			    $stmt->bind_param("sssss", $desayuno, $pColacion, $comida, $sColacion, $cena);

			    if ($stmt->execute()) {
			        echo "Datos agregados correctamente.";
			    } else {
			        echo "Error al agregar los datos: " . $stmt->error;
			    }

			    // Close the statement
			    $stmt->close();
			}

			// Close the connection
			$conn->close();

			header('Location: http://localhost/proyecto/vistanutriologo/VistaNutriologo.html');
?>