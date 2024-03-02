<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/matematicas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="wrapper">
        <i class="fas fa-circle-question"></i>
        <h2 class="question">¿Cuál es la fórmula para el área de un rectángulo?</h2>
        <div class="btn-group">
            <div class="button-group-top">
                <button onclick="checkAnswer5('a')">a) A = base * altura</button>
                <button onclick="checkAnswer5('b')">b) A = base + altura</button>
            </div>
            <div class="button-group-bottom">
                <button onclick="checkAnswer5('c')">c) A = base - altura</button>
                <button onclick="checkAnswer5('d')">d) A = base / altura</button>
            </div>
        </div>
    </div>
    <div id="puntosMostrados">Puntos: 0</div>
    
<script defer src='respuestas.js'></script>
</body>
</html>
