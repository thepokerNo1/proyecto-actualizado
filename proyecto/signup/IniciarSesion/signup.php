<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";



// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " .mysql_connect_error());
}

$p_usuario = $_POST['txtusuario']; // Obtener el valor del campo de entrada del usuario
$p_contraseña = $_POST['txtcontraseña']; // Obtener el valor del campo de entrada de la contraseña
$p_contraseña2 = $_POST['txtcontraseñacon']; // Obtener el valor del campo de entrada de la contraseñacon

$stmt = $conn->prepare("CALL nombre_usuario(?)");
$stmt->bind_param("s", $p_usuario);
$stmt->execute();

    // Obtener los resultados de la consulta
$result = $stmt->get_result();



if ($result->num_rows > 0) {
    // El usuario existe en la base de datos
    echo "El usuario ya existe.";
} else {
    $stmt->close();
    if($p_contraseña2 == $p_contraseña){
        $stmt = $conn->prepare("CALL agregar_usuario(?, ?)");
        $stmt->bind_param("ss", $p_usuario, $p_contraseña);
        
        if ($stmt->execute()) {
            echo "Usuario agregado correctamente.";
        } else {
            echo "Error al agregar el usuario: " . $stmt->error;
        }
    }
}

// Cerrar la conexión y la sentencia
$stmt->close();
$conn->close();
?>