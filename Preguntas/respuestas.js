function getPuntos() {
    return parseInt(localStorage.getItem('puntos')) || 0;
}

let puntos = getPuntos(); // Inicializar los puntos desde el localStorage

// Función para actualizar los puntos en la interfaz y en el localStorage
function actualizarPuntos(puntos) {
    localStorage.setItem('puntos', puntos);
    document.getElementById('puntosMostrados').innerHTML = 'Puntos: ' + puntos;
}

// Función para verificar la respuesta
function checkAnswer(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
        sumarPuntos(10);
        window.location.href = 'Pregunta2Biologia.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        restarPuntos(5);
    }
}

// Función para sumar puntos
function sumarPuntos(puntosASumar) {
    puntos += puntosASumar;
    actualizarPuntos(puntos);
    console.log('Puntos obtenidos:', puntos);
}

// Función para restar puntos
function restarPuntos(puntosARestar) {
    puntos -= puntosARestar;
    actualizarPuntos(puntos);
    console.log('Puntos obtenidos:', puntos);
}

// Mostrar los puntos al cargar la página
actualizarPuntos(puntos);
