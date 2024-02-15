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
                <li><a href="matematicas.php" class="nav-link px-2 text-white">Matematicas</a></li>
                <li><a href="biologia.php" class="nav-link px-2 text-white">Biologia</a></li>
                <li><a href="fisica.php" class="nav-link px-2 text-white">Fisica</a></li>
                <li><a href="quimica.php" class="nav-link px-2 text-white">Quimica</a></li>
                <li><a href="general.php" class="nav-link px-2 text-white">General</a></li>
                
            </ul>
        </div>
    </div>
</header>

<section class="secciones">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="categorias">Seleccione una categoria</h2>
                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="IMG/biologia.jpg" class="card-img-top" alt="Biología" >
                    <div class="card-body">
                        <a href="registro.php">
                            <button class="botones">PLAY</button>
                        </a> 
                    </div>
                </div>

                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="IMG/matematicas.png" class="card-img-top" alt="Matemáticas">
                    <div class="card-body">
                        <a href="registro.php">
                            <button class="botones">PLAY</button>
                        </a> 
                    </div>
                </div>

                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="IMG/fisica.jpeg" class="card-img-top" alt="fisica">
                    <div class="card-body">
                        <a href="registro.php">
                            <button class="botones">PLAY</button>
                        </a> 
                    </div>
                </div>
                
                <div class="card" style="width: 18rem; display: inline-block;">
                    <img src="IMG/qumica.jpg" class="card-img-top" alt="quimica">
                    <div class="card-body">
                        <a href="registro.php">
                            <button class="botones">PLAY</button>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Curiosidades</h4>
                <p>¿Sabías que el juego de trivia más largo registrado duró 36 horas?</p>
                <p>Descubre más datos interesantes sobre el mundo del conocimiento.</p>
            </div>
            <div class="col-md-4">
                <h4>Contacto</h4>
                <p>Correo: info@quizgame.com</p>
                <p>Teléfono: +123 456 789</p>
            </div>
            <div class="col-md-4">
                <h4>Síguenos</h4>
                <p>Encuéntranos en redes sociales:</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" target="_blank">Facebook</a></li>
                    <li class="list-inline-item"><a href="#" target="_blank">Twitter</a></li>
                    <li class="list-inline-item"><a href="#" target="_blank">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>

</html>