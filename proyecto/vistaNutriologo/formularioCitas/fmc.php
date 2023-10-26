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
			    $fecha = $_POST['inFecha'];
			    $hora = $_POST['inHora'];
			    $id_paciente = $_POST['inIdPaciente'];
			    
			   

			    // Perform the database operation
			    $stmt = $conn->prepare("INSERT INTO cita (fecha, hora, id_paciente) VALUES (?, ?, ?)");
			    $stmt->bind_param("sss", $fecha, $hora, $id_paciente);

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