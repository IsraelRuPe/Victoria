<?php
include('../conexion/cone.php');

if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];

    // Realizar la operación de eliminación en la base de datos
    $sql = "DELETE FROM USUARIOS WHERE idUsuario = $idUsuario";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Éxito en la eliminación
        echo "Usuario eliminado exitosamente.";
    } else {
        // Error en la eliminación
        echo "Error al eliminar el usuario: " . mysqli_error($conn);
    }
} else {
    // No se proporcionó un ID de usuario válido
    echo "ID de usuario no proporcionado.";
}

mysqli_close($conn);
?>
