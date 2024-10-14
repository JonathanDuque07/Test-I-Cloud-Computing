<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Web App - Jonathan Francisco Gallegos Duque</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #ffcc00;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .highlight {
            color: #ffcc00;
            font-weight: bold;
        }
        .signature {
            margin-top: 40px;
            font-style: italic;
            font-size: 1em;
            color: #ccc;
        }
        footer {
            margin-top: 50px;
            font-size: 0.9em;
            color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Establece la zona horaria
        date_default_timezone_set('America/Mexico_City');

        // Variables para personalizar el saludo
        $nombre = "Jonathan Francisco Gallegos Duque";
        $time = date('H'); // Hora actual en formato de 24 horas

        // Función para determinar el saludo basado en la hora
        function greeting($time) {
            if ($time < 12) {
                return "¡Buenos días!";
            } elseif ($time >= 12 && $time < 18) {
                return "¡Buenas tardes!";
            } else {
                return "¡Buenas noches!";
            }
        }

        // Llamada a la función y muestra el saludo junto con el nombre
        echo "<h1>" . greeting($time) . " " . $nombre . "!</h1>";
        echo "<p>Bienvenido a tu primera Web App desarrollada con PHP.</p>";
        echo "<p>Hoy es <span class='highlight'>" . date('d/m/Y') . "</span> y la hora actual es <span class='highlight'>" . date('H:i:s') . "</span>.</p>";
        echo "<p>Esta es tu primera aplicación web dinámica, ¡con un diseño bonito y moderno!</p>";
        echo "<p class='highlight'>¡Espero que tengas un excelente día programando!</p>";
        ?>
        <div class="signature">
            <p>- Diseñado con pasión por Jonathan Francisco Gallegos Duque.</p>
        </div>
    </div>
    <footer>
        &copy; <?php echo date('Y'); ?> Jonathan Francisco Gallegos Duque. Todos los derechos reservados.
    </footer>
</body>
</html>
