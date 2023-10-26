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

$usuario = $_POST['txtusuario']; // Obtener el valor del campo de entrada del usuario
$contraseña = $_POST['txtcontraseña']; // Obtener el valor del campo de entrada de la contraseña

// Crear una sentencia preparada para ejecutar el procedimiento almacenado
$stmt = $conn->prepare("CALL buscar_usuario(?, ?)");
$stmt->bind_param("ss", $usuario, $contraseña); // Asignar los valores de los parámetros

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$result = $stmt->get_result();

// Verificar si se encontró un usuario con la combinación de usuario y contraseña
if ($result->num_rows > 0) {
    // Usuario y contraseña válidos
    echo "Usuario autenticado correctamente.";
    header("Location: /proyecto/vistanutriologo/vistanutriologo.html");
    exit();
} else {
    // Usuario o contraseña inválidos
    echo "Usuario o contraseña incorrectos.";
    header("Location: /proyecto/login/login.html");
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conn->close();
?>