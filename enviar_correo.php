<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Configura los detalles del correo
    $destinatario = "tucorreo@example.com"; // Reemplaza esto con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje del formulario de contacto";

    // Construye el cuerpo del correo
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo: $correo\n";
    $cuerpoMensaje .= "Teléfono: $telefono\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    // Envía el correo
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redirige de vuelta al formulario con un mensaje de éxito
    header("Location: index.html?enviado=true");
    exit;
}
?>