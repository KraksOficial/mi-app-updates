<?php
header('Content-Type: application/json'); // Indicar que la respuesta es JSON

// Datos de la última versión
$latestVersion = array(
    "version" => "1.0.0", // Última versión disponible
    "apkUrl" => "https://drive.usercontent.google.com/download?id=1HOGwejO006XUFaZduIppqWvIf3H4Na5g&export=download&authuser=0&confirm=t&uuid=a1852d4e-d448-4921-8feb-63776b10ad51&at=AEz70l4oKGcSMbn71TLyu4kpfVUG:1741214528196" // URL del APK
);

// Devolver los datos en formato JSON
echo json_encode($latestVersion);
?>
