<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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

<main>
    <section class="sobrenosotros" id="sobrenosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <article>
                        <h1>¿Qué es Quiz Game?</h1>
                        <p>p>Quiz Game es una plataforma de juegos de preguntas y respuestas diseñada para entretener y desafiar a jugadores de todas las edades. Con una amplia variedad de categorías, desde historia y ciencia hasta cultura pop y deportes, Quiz Game ofrece una experiencia educativa y divertida para aquellos que buscan poner a prueba sus conocimientos</p>
                    </article>
                </div>
                <div class="col-lg-6">
                    <img src="IMG/img1.jpg" width="300px">
                </div>
            </div>
        </div>
    </section>

    <section class="normas" id="normas">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article>
                        <h1>Normas</h1>
                        <h2>Norma 1</h2>
                        <p>Cada pregunta presentada en el juego de quiz se centrará exclusivamente en temas científicos, abarcando diversas disciplinas como biología, química, física, astronomía, y ciencias de la tierra, entre otras. Las preguntas serán de opción múltiple, con cuatro opciones de respuesta (A, B, C, D), de las cuales solo una será correcta. Las preguntas estarán diseñadas para evaluar el conocimiento, la comprensión y la aplicación de conceptos científicos.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="posicion">
                        <h2>Norma 2</h2>
                        <p>Los participantes deben seleccionar la respuesta que consideren correcta para cada pregunta sin la ayuda de material de referencia externo, como libros, notas o internet, para asegurar un campo de juego nivelado y fomentar la honestidad y la integridad.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-12">
                    <article class="posicion">
                        <h2>Norma 3</h2>
                        <p>Por cada respuesta correcta, se otorgarán puntos al participante o equipo, y se descontarán puntos por respuestas incorrectas</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="galeria" id="galeria">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <img src="IMG/img2.jpg" class="img-fluid" alt="Gallery Image 1">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="IMG/img2.jpg" class="img-fluid" alt="Gallery Image 2">
                </div>
                <div class="col-lg-4 mb-3">
                    <img src="IMG/img2.jpg" class="img-fluid" alt="Gallery Image 3">
                </div>
            </div>
        </div>
    </section>
    
</main>


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

