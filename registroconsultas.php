<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['contraseña']) && isset($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['contraseña']) && !empty($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $email = $_POST['email'];


        $consulta = "SELECT * FROM Usuario WHERE nombre = '$nombre'";
        $resultadoconsulta = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultadoconsulta) > 0) {
            echo "Vuelve a introducir otro nombre de usuario. El nombre de usuario ya existe";
        } else {
   
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
        echo "Por favor, complete todos los campos del formulario.";
    }
}

mysqli_close($conexion);
?>
