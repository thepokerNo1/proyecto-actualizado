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
			    $nombre = $_POST['inNombre'];
			    $apellidoPaterno = $_POST['inPaterno'];
			    $apellidoMaterno = $_POST['inMaterno'];
			    $telefono = $_POST['inTelefono'];
			    $edad = $_POST['inEdad'];
			    $genero = isset($_POST['inHombre']) ? 'Hombre' : (isset($_POST['inMujer']) ? 'Mujer' : '');

			    // Perform the database operation
			    $stmt = $conn->prepare("INSERT INTO paciente (nombre, ap, am, tel, edad, sexo) VALUES (?, ?, ?, ?, ?, ?)");
			    $stmt->bind_param("ssssss", $nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $edad, $genero);

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