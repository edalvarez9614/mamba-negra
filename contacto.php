<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <style>
        body { background-color: #111; color: #fff; text-align: center; padding-top: 100px; }
        .btn-container { display: flex; flex-direction: column; gap: 20px; align-items: center; }
        .btn { width: 80%; max-width: 400px; padding: 15px; border-radius: 5px; text-decoration: none; color: #fff; font-weight: bold; font-size: 1.5rem; text-align: center; }
        .btn-facebook { background-color: #1877F2; } /* Azul de Facebook */
        .btn-instagram { background-color: #E1306C; } /* Rosa/rojo de Instagram */
        .btn-x { background-color: #1DA1F2; } /* Azul claro de X (antes Twitter) */
        .btn-whatsapp { background-color: #25D366; } /* Verde de WhatsApp */
        .btn-whatsapp:hover { background-color: #1EBE5D; } /* Verde más oscuro al pasar el mouse */
        .btn-home { background-color: #00ccff; margin-top: 40px; } /* Botón para volver a la página principal */
    </style>
</head>
<body>
    <h2>Contáctanos</h2>
    <div class="btn-container">
        <a href="https://www.facebook.com/profile.php?id=61573805862128" class="btn btn-facebook" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/edgaralvarez1996/" class="btn btn-instagram" target="_blank">Instagram</a>
        <a href="https://twitter.com/" class="btn btn-x" target="_blank">X (antes Twitter)</a>
        <a href="https://wa.me/9098371636" class="btn btn-whatsapp" target="_blank">WhatsApp</a>
    </div>
    <div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="inicio.php" class="btn btn-home">Volver a Inicio</a>
    </div>
</body>
</html>
