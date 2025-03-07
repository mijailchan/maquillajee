<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $para = "bersainchan18@gmail.com";  // Reemplaza con tu correo real
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

    $headers = "From: $email";

    if (mail($para, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente.'); window.location.href='contacto.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje. Inténtalo de nuevo.'); window.history.back();</script>";
    }
} else {
    header("Location: contacto.html");
    exit();
}
?>
