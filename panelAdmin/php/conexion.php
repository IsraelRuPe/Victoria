<?php

// $servername = "50.6.138.165";
// $database = "victor51_towal";
// $username = "victor51_ad_tatto";
// $password = "sPpUn7zIf34,";

$servername = "localhost";
$database = "victor51_towal";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

} catch (Exception $e) {
    echo "Ocurrió un problema en la conexión: " . $e->getMessage();
}
?>
