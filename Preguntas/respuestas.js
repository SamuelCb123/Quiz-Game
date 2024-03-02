function getPuntos() {
    return parseInt(localStorage.getItem('puntos')) || 0;
}

let puntos = getPuntos(); 


function actualizarPuntos(puntos) {
    localStorage.setItem('puntos', puntos);
    document.getElementById('puntosMostrados').innerHTML = 'Puntos: ' + puntos;
}

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

function checkAnswer2(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
        // Llama a la función sumarPuntos si está definida
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
        // Cambia la ubicación si es necesario
        window.location.href = 'Pregunta3Biologia.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
    }
}

function checkAnswer3(selectedAnswer) {
    const respuestaCorrecta = 'c';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
        // Llama a la función sumarPuntos si está definida
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta4biologia.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
    }
}


function checkAnswer4(selectedAnswer) {
    const respuestaCorrecta = 'c';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = '../secciones.php'
    } else {
        alert('Respuesta incorrecta.');
        
        
        
    }
}


function checkAnswer5(selectedAnswer) {
    const respuestaCorrecta = 'a';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta2matematicas.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
        
    }
}

function checkAnswer6(selectedAnswer) {
    const respuestaCorrecta = 'd';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta3matematicas.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
    }
}

function checkAnswer7(selectedAnswer) {
    const respuestaCorrecta = 'a';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta4matematicas.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
    }
}

function checkAnswer8(selectedAnswer) {
    const respuestaCorrecta = 'a';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = '../secciones.php';
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
    }
}

function checkAnswer9(selectedAnswer) {
    const respuestaCorrecta = 'c';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta2fisica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
    }
}

function checkAnswer10(selectedAnswer) {
    const respuestaCorrecta = 'a';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta3fisica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
    }
}

function checkAnswer11(selectedAnswer) {
    const respuestaCorrecta = 'd';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta4fisica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
        
    }
}

function checkAnswer12(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = '../secciones.php';
    } else {
        alert('Respuesta incorrecta.');
        
        
        
    }
}

function checkAnswer13(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta2quimica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
    }
}

function checkAnswer14(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta3quimica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
    }
}
function checkAnswer15(selectedAnswer) {
    const respuestaCorrecta = 'b';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = 'Pregunta4quimica.php?puntos=' + puntos;
    } else {
        alert('Respuesta incorrecta.');
        
        if (typeof restarPuntos === 'function') {
            restarPuntos(5);
        }
        
    }
}

function checkAnswer16(selectedAnswer) {
    const respuestaCorrecta = 'a';

    if (selectedAnswer === respuestaCorrecta) {
        alert('¡Respuesta correcta!');
      
        if (typeof sumarPuntos === 'function') {
            sumarPuntos(10);
        }
      
        window.location.href = '../secciones.php';
    } else {
        alert('Respuesta incorrecta.');
        
        
        
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
