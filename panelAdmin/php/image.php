<?php
include "conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $descripcion = $_POST["descrimage"];

    // Directorio donde se almacenarán las imágenes
    $directorio = "../img/galeriatatu/";

    $nombreImagen = $_FILES["imagen"]["name"];
    $rutaTemporal = $_FILES["imagen"]["tmp_name"];
    $rutaDestino = $directorio . $nombreImagen;

    echo "Nombre de la imagen: " . $nombreImagen . "<br>";
    echo "Ruta temporal: " . $rutaTemporal . "<br>";
    echo "Ruta de destino: " . $rutaDestino . "<br>";

    echo "Ruta temporal del archivo: " . $rutaTemporal . "<br>";

    // Mover la imagen al directorio de destino
 
    if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
        $stmt = $conn->prepare("INSERT INTO IMAGENES (descripcion, ruta, nombre) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $descripcion, $rutaDestino, $nombreImagen);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Imagen subida correctamente.";
        } else {
            echo "Error al registrar en la base de datos: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al mover la imagen al directorio de destino.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
