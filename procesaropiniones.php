<?php
// Verificar si se ha enviado un comentario y si el campo 'comentario' está definido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comentario']) && isset($_POST['nombre'])) {
    // Incluir archivo de conexión a la base de datos
    include('conexion.php');

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    // Preparar y ejecutar la consulta SQL para insertar el comentario
    $sql = "INSERT INTO Comentario (Nombre, comentario) VALUES (?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);

    // Verificar si la consulta se preparó correctamente
    if ($stmt) {
        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "ss", $nombre, $comentario);
        mysqli_stmt_execute($stmt);
        
        // Cerrar la consulta y la conexión a la base de datos
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        
        // Redirigir al usuario a la página de comentarios después de agregar el comentario
        header("Location: opiniones.php");
        exit();
    } else {
        // En caso de error al preparar la consulta
        echo "Error al preparar la consulta SQL: " . mysqli_error($conexion);
    }
}
?>
