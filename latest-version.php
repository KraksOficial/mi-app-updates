<?php
header('Content-Type: application/json'); // Indicar que la respuesta es JSON

// Datos de la última versión
$latestVersion = array(
    "version" => "1.0.0", // Última versión disponible
    "apkUrl" => "https://bit.ly/dolarvenezuelaapk" // URL del APK
);

// Devolver los datos en formato JSON
echo json_encode($latestVersion);
?>
