<?php
// Establece la zona horaria
date_default_timezone_set('America/Mexico_City');

// Variables para personalizar el saludo
$time = date('H');

// Función para determinar el saludo basado en la hora
function greeting($time) {
    if ($time < 12) {
        return "Good morning!";
    } elseif ($time < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}

// Imprime el saludo
echo greeting($time) . "<br>";
echo "Welcome to my 1st PHP Code. Have a great day!";
?>
