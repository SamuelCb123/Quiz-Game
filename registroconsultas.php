<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si todos los campos están presentes y no están vacíos
    if (isset($_POST['nombre']) && isset($_POST['contraseña']) && isset($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['contraseña']) && !empty($_POST['email'])) {
        // Validar que el campo 'nombre' contenga solo letras
        if (preg_match("/^[a-zA-Z]+$/", $_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];

            // Verificar si el nombre de usuario ya existe en la base de datos
            $consulta = "SELECT * FROM Usuario WHERE nombre = '$nombre'";
            $resultadoconsulta = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($resultadoconsulta) > 0) {
                echo "Vuelve a introducir otro nombre de usuario. El nombre de usuario ya existe";
            } else {
                // Insertar el nuevo usuario si no existe
                $consulta2 = "INSERT INTO Usuario (nombre, contraseña, email) VALUES ('$nombre', '$contraseña', '$email')";
                $resultado = mysqli_query($conexion, $consulta2);
                
                if ($resultado) {
                    header("Location: iniciarsesion.php");
                    exit();
                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
            }
        } else {
            echo "El campo nombre solo puede contener letras.";
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}

mysqli_close($conexion);
?>