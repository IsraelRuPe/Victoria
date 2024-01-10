<?php
session_start();
include('../conexion/cone.php');

if (isset($_POST['loginemail'], $_POST['passlogin'])) {
    $correo = $_POST['loginemail'];
    $contrasena = $_POST['passlogin'];

    // Consulta preparada para evitar inyección SQL
    $SQL = "SELECT idUsuario, correo, telefono, nombre, paterno, materno, GENEROS.genero, GENEROS.idGenero, fechaNacimiento, TIPOS_USUARIO.tipoUsuario, TIPOS_USUARIO.idTipoUsuario, contrasenia
            FROM USUARIOS
            INNER JOIN TIPOS_USUARIO ON USUARIOS.tipoUsuario = TIPOS_USUARIO.idTipoUsuario
            INNER JOIN GENEROS ON USUARIOS.genero = GENEROS.idGenero
            WHERE correo = ?";

    $stmt = mysqli_prepare($conn, $SQL);
    mysqli_stmt_bind_param($stmt, "s", $correo);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verificar la contraseña usando password_verify
        if (password_verify($contrasena, $row['contrasenia'])) {
            // Contraseña correcta, puedes realizar acciones de inicio de sesión aquí
            $_SESSION["idUsuario"] = $row['idUsuario'];
            $_SESSION["correo"] = $row['correo'];
            $_SESSION["telefono"] = $row['telefono'];
            $_SESSION["nombre"] = $row['nombre'];
            $_SESSION["apaterno"] = $row['paterno'];
            $_SESSION["amaterno"] = $row['materno'];
            $_SESSION["genero"] = $row['genero'];
            $_SESSION["idGenero"] = $row['idGenero'];
            $_SESSION["tipoUsuario"] = $row['tipoUsuario'];
            $_SESSION["idTipoUsuario"] = $row['idTipoUsuario'];
            $_SESSION["fechaNacimiento"] = $row['fechaNacimiento'];

            // Regenerar el ID de sesión para mejorar la seguridad
            session_regenerate_id();

            header("Location: ../panelAdmin");
            exit();
        } else {
            // Contraseña incorrecta
            echo "<script>
                location.href = \"/login/?error=1\";
                </script>";
        }
    } else {
        // Usuario no encontrado
        echo "<script>
            location.href = \"/login/?error=1\";
            </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    // Datos de inicio de sesión no proporcionados
    header("Location: index.php");
    exit();
}
?>
