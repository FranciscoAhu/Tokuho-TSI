<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tokuho";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['contrasena']);

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM usuario WHERE email='$user'AND contrasena='$pass' AND estado='1'  AND idTipo ='1' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();
        
        
        $_SESSION['mensaje'] = "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($user) . "!";
        header("Location: /admin"); // Redirigir al panel de administración o donde necesites
        exit;
        
            
        
    } else {
        // Contraseña incorrecta
            $message = "Redirigiendo al inicio de sesión...";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:0;url=/inicio"); // Recargar la página de login después de 3 segundos
            exit;
    }
}

// Cerrar conexión
$conn->close();
?>

