<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comentario']) && isset($_POST['nombre'])) {
  
    include('conexion.php');

    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

  
    $sql = "INSERT INTO Comentario (Nombre, comentario) VALUES (?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);

   
    if ($stmt) {
     
        mysqli_stmt_bind_param($stmt, "ss", $nombre, $comentario);
        mysqli_stmt_execute($stmt);
        
       
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        

        header("Location: opiniones.php");
        exit();
    } else {
  
        echo "Error al preparar la consulta SQL: " . mysqli_error($conexion);
    }
}
?>
