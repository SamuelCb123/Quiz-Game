<?php

include('../conexion.php');

$idPregunta = 1; // Aquí debes establecer el ID de la pregunta si no lo estás pasando por POST
$respuestaSeleccionada = $_POST['respuestaSeleccionada'];

// Preparar y ejecutar consulta
$stmt = $conn->prepare("SELECT respuesta_correcta FROM Pregunta WHERE id_pregunta = ?");
$stmt->execute([$idPregunta]);
$respuesta = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar respuesta
if($respuestaSeleccionada === $respuesta['respuesta_correcta']) {
    echo json_encode(['mensaje' => '¡Respuesta correcta!']);
} else {
    echo json_encode(['mensaje' => 'Respuesta incorrecta.']);
}
?>
