<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = & $_POST['idUsuario'];
    $contraBd = $_POST['contraBd'];
    $contraVieja = $_POST['contraVieja'];
    $contraNueva = $_POST['contraNueva'];
    $contraNueva2 = $_POST['contraNueva2'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    if ($contraVieja === $contraBd){
        if( $contraNueva === $contraNueva2){
            // Crear la consulta SQL para actualizar el registro
            $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', contrasena='$contraNueva' WHERE idUsuario='$id'";
    
       // Ejecutar la consulta y verificar si se actualizó correctamente
            if ($conn->query($sql) === TRUE) {
                echo "Registro actualizado con éxito";
            } else {
                echo "Error al actualizar el registro: " . $conn->error;
            }
    
       // Cerrar la conexión
            $conn->close();
        } 
    }
    
}
?>