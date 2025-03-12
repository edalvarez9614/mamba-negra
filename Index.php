<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonido Musical - USA</title>
    <style>
        body { margin: 0; padding: 0; font-family: Arial, sans-serif; color: #fff; background-color: #000; }
        .hero {
            height: 100vh;
            background: url('fondo.png') no-repeat center top;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 { font-size: 5rem; background-color: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; }
        .hero p { font-size: 2rem; background-color: rgba(0, 0, 0, 0.7); padding: 15px; border-radius: 10px; }
        .scroll-section { background-color: #111; padding: 20px; text-align: center; }
        .gallery img, .gallery video { width: 300px; height: auto; border-radius: 10px; margin: 10px; }
        header { display: flex; justify-content: space-between; align-items: center; background-color: #222; padding: 25px; }
        nav { display: flex; gap: 40px; }
        nav a { color: #ffcc00; text-decoration: none; font-weight: bold; font-size: 1.2rem; }
        nav a:hover { color: #00ccff; }
        .contacto-btn { background-color: #ff5555; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <div class="logo">DJ Mamba negra... Eventos</div>
        <nav>
           <a href="inicio.php">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="contacto.php">Contáctanos</a>
        </nav>
        <a class="contacto-btn" href="tel:909 837 1636">📞 909 837 1636</a>
    </header>

    <div class="hero">
        <h1>DJ PARA FIESTAS EN U.S.A</h1>
        <p>Servicio de DJ para todo tipo de eventos: bodas, quinceañeras, comuniones, bautizos e incluso divorcios. <strong> Precios accesibles</strong></p>
    </div>

    <div class="scroll-section">
    <h2>Galería de Eventos</h2>
    <div class="gallery">
        <img src="1.jpg" alt="Evento 1">
        <img src="2.jpg" alt="Evento 2">
        <video controls>
            <source src="4.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <video controls>
            <source src="6.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <video controls>
            <source src="7.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <video controls>
            <source src="8.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
    </div>
</div>

</body>
</html>

