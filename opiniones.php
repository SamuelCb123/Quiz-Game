<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center align-items-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-white">Inicio</a></li>
                <li><a href="#sobrenosotros" class="nav-link px-2 text-white">¿Qué es Quiz Game?</a></li>
                <li><a href="#normas" class="nav-link px-2 text-white">Normas</a></li>
                <li><a href="#galeria" class="nav-link px-2 text-white">Imágenes del juego</a></li>
            </ul>


        </div>
    </div>
</header>

<div class="container">
    <h2 class="mb-4">Deja tu opinión</h2>
    <div class="comment-box">
        <form action="procesaropiniones.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Tu nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
        
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar comentario</button>
        </form>
    </div>
</div>

<?php
     include('conexion.php');

    $sql = "SELECT * FROM Comentario ORDER BY fecha DESC";
    $resultado = mysqli_query($conexion, $sql);


    if ($resultado && mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<div class='comment-boxito'>";
            echo "<p class='comment-date'>Fecha: " . $fila['fecha'] . "</p>";
            echo "<p class='comment-text'>Nombre: " . $fila['Nombre'] . "</p>"; // Agregar esta línea para imprimir el nombre del usuario
            echo "<p class='comment-text'>" . $fila['comentario'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p class='comment-text'>No se encontraron comentarios.</p>";
    }


    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc
