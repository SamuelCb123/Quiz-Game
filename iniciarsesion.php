<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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

            <div class="text-end">
                <a href="registro.php">
                    <button class="botones">Registro</button>
                  </a> 
                  <a href="iniciarsesion.php">
                    <button class="botones">Iniciar sesion</button>
                  </a> 
            </div>
        </div>
    </div>
</header>



<form class="form-register" method="post" action="iniciarsesionconsultas.php">
    <h4 class="justify-content-center">Iniciar sesion</h4>
    <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="contraseña" id="contrasena" placeholder="Ingrese su Contraseña">
    <input class="botons" type="submit" value="Registrar">
    <p><a href="registro.php">¿Aun no tienes cuenta?</a></p>
</form>

</body>
</html>