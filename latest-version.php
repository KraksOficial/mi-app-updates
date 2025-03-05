<?php
header('Content-Type: application/json'); // Indicar que la respuesta es JSON

// Datos de la última versión
$latestVersion = array(
    "version" => "1.0.0", // Última versión disponible
    "apkUrl" => "https://drive.usercontent.google.com/download?id=1iV_TE7CqF6FlzBH9YUrAgQ6vBHs5SLSB&export=download&authuser=0&confirm=t&uuid=40c420df-c2a5-42c1-865b-1a2884f429c1&at=AEz70l5dyL6cotjj267oFE5E8Y6d:1741210787536" // URL del APK
);

// Devolver los datos en formato JSON
echo json_encode($latestVersion);
?>
