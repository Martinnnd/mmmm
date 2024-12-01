<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = $_POST['respuesta'];

    if (!empty($respuesta)) {
        $to = "deoromartinignacio@gmail.com"; // Correo de destino
        $subject = "Encuesta Finde - Respuesta recibida";
        $message = "La respuesta seleccionada es: " . htmlspecialchars($respuesta);
        $headers = "From: no-reply@tu-dominio.com";

        // Enviar correo
        if (mail($to, $subject, $message, $headers)) {
            echo "Correo enviado correctamente.";
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "Por favor, selecciona una opción.";
    }
}
?>
