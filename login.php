<?php
// Obtiene la dirección IP del visitante
$ip_address = $_SERVER['REMOTE_ADDR'];

// Abre un archivo para escribir
$file = 'ips.txt';
$handle = fopen($file, 'a');

// Verifica si se pudo abrir el archivo correctamente
if ($handle === false) {
    die('No se pudo abrir el archivo para escritura');
}

// Escribe la dirección IP en el archivo, seguido de un salto de línea
fwrite($handle, $ip_address . "\n");

// Cierra el archivo después de escribir la dirección IP
fclose($handle);

// Opcional: Redirige al visitante a otra página
header('Location: https://www.ejemplo.com');
exit;
?>
