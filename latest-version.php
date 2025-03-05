<?php
header('Content-Type: application/json'); // Indicar que la respuesta es JSON

// Datos de la última versión
$latestVersion = array(
    "version" => "1.0.0", // Última versión disponible
    "apkUrl" => "https://drive.usercontent.google.com/download?id=1aJdOpBTUecitEWsBigZ_AJIEQFZg0OL4&export=download&authuser=0&confirm=t&uuid=c6b6abee-cd9e-4401-9a97-c09b3a277ec2&at=AEz70l6Y8xDFd71T7dnubagB5K3r:1741210153636" // URL del APK
);

// Devolver los datos en formato JSON
echo json_encode($latestVersion);
?>