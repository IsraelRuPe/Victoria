<?php
// Iniciar sesión
// session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la conexión a la base de datos
include('../conexion/cone.php');

if (isset($_POST['imagen64'], $_POST['Tipouser'], $_POST['apodo'], $_POST['nombre'], $_POST['Apaterno'], $_POST['Amaterno'], $_POST['genero'], $_POST['telefono'], $_POST['fechaNacimiento'], $_POST['correo'], $_POST['contrasena'], $_POST['redireccion'])) {
    $Tipouser = validarCampo($_POST['Tipouser']);
    $photo = base64_encode ($_POST['imagen64']);
    $apodo = validarCampo($_POST['apodo']);
    $nombre = validarCampo($_POST['nombre']);
    $apellidopaterno = validarCampo($_POST['Apaterno']);
    $apellidomaterno = validarCampo($_POST['Amaterno']);
    $genero = validarCampo($_POST['genero']);
    $telefono = validarCampo($_POST['telefono']);
    $fechanaci = validarCampo($_POST['fechaNacimiento']);
    $correo = validarCampo($_POST['correo']);
    $contrasena = validarCampo($_POST['contrasena']);
    $redireccion = validarCampo($_POST['redireccion']);


    $sql = "SELECT COUNT(*) as count FROM USUARIOS WHERE correo = '$correo'";
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_assoc($resultado);

    // Verificar si el correo está registrado
    if ($fila['count'] > 0) {
        // El correo ya está registrado, mostrar un mensaje de error o redirigir a otra página
        header("Location: ../registro/?error=correo_existente");
        exit();
    } else {
        // El correo no está registrado, puedes continuar con el proceso de registro
        // ...
    }

    if (empty($nombre) || empty($apellidopaterno) || empty($apellidomaterno) || empty($telefono) || empty($fechanaci) || empty($genero) || empty($correo) || empty($contrasena) || empty($apodo) || empty($photo) || empty($Tipouser)) {
        header("Location: ../registro/?error=falta_datos");
        exit();
    }

    $fechaNacimiento = new DateTime($fechanaci);
    $hoy = new DateTime();
    $edad = $hoy->diff($fechaNacimiento)->y;
    $edadMinima = 18;

    if ($edad < $edadMinima) {
        header("Location: ../registro/?error=menor_edad");
        exit();
    }
    //valiacion de 10 digitos
    if (strlen($telefono) !== 10 || !is_numeric($telefono)) {
        header("Location: ../registro/?error=telefono_invalido");
        exit();
    }

    // Validar la dirección de correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../registro/?error=correo_invalido");
        exit();
    }
    // Validar la contraseña 
    if (strlen($contrasena) < 8 || !preg_match('/\d/', $contrasena) || !preg_match('/[a-zA-Z]/', $contrasena)) {
        header("Location: ../registro/?error=contrasena_invalida");
        exit();
    }
    $hashedPassword = password_hash($contrasena, PASSWORD_DEFAULT);

    // Consulta SQL para insertar el usuario en la base de datos
    $SQL = "INSERT INTO USUARIOS (correo, contrasenia, nombre, paterno, materno, fechaNacimiento, genero, tipoUsuario, fechaRegistro, telefono, apodo, userphoto)
            VALUES ('$correo', '$hashedPassword', '$nombre', '$apellidopaterno', '$apellidomaterno', '$fechanaci', '$genero', '$Tipouser', NOW(), '$telefono', '$apodo', '$photo');";

    // Ejecutar la consulta
    $exeSQL = mysqli_query($conn, $SQL);

    // Verificar el resultado de la consulta
    if ($exeSQL) {
        // Obtener el ID del usuario recién insertado
        $idUsuario = mysqli_insert_id($conn);

        // Establecer variables de sesión
        $_SESSION["idusuario"] = $idUsuario;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["apaterno"] = $apellidopaterno;
        $_SESSION["amaterno"] = $apellidomaterno;
        $_SESSION["telefono"] = $telefono;
        $_SESSION["correo"] = $correo;
        $_SESSION["apodo"] = $apodo;
        $_SESSION["photo"] = $photo;

        header("Location: $redireccion");
        exit();
    } else {
        header("Location: ../registro/?error=registro_fallido");
        exit();
    }
} else {
    header("Location: ../registro/?error=falta_datos");
    exit();
}

function validarCampo($campo)
{
    $campo = trim($campo); // Eliminar espacios en blanco al principio y al final
    $campo = stripslashes($campo); // Eliminar barras invertidas
    $campo = htmlspecialchars($campo); // Convertir caracteres especiales a entidades HTML
    return $campo;
}
