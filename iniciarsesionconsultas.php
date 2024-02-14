<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT email, contraseña FROM Usuario WHERE email = '$email' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            header("Location: secciones.php");
            exit();
        } else {
            echo "No existes";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
