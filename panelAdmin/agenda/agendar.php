<?php

include './conexion/cone.php';

session_start();
header("Content-Type: application/json");

$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';

switch ($accion) {
    case 'leer':
        $resultado = array();
        $consulta = "SELECT * FROM CITAS";
        $result = $conn->query($consulta);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultado[] = $row;
            }
        }

        echo json_encode($resultado);
        break;
    case 'agregar':
        $idUsuario = $_POST['id_usuario'];
        $idTatuador = $_SESSION['idUsuario'];

        $stmt = $conn->prepare("INSERT INTO `CITAS`(`idCita`,`idTatuador`, `idUsuario`, `idCotizacion`, `idHorario`, `titulo`, `idEstado`, `descripcion`, `FechaRegistro`, `FechaActualizada`) VALUES (null, ?, ?, ?, ?, ?, ?, ?, NOW(), null)");
        $stmt->bind_param("iiisssss", $idTatuador, $idUsuario, $_POST['id_cotizacion'], $_POST['id_horario'], $_POST['titulo'], $_POST['estadocita'], $_POST['descripcion']);
        $stmt->execute();
        $stmt->close();
        print_r($_POST);
        break;
    case 'borrar':
        $stmt = $conn->prepare("DELETE FROM `CITAS` WHERE `idCita` = ?");
        $stmt->bind_param("i", $_POST['id']);
        $stmt->execute();
        $stmt->close();
        print_r($_POST);
        break;
    case 'actualizar':
        $stmt = $conn->prepare("UPDATE `CITAS` SET `idTatuador` = ?, `idUsuario` = ?, `idCotizacion` = ?, `idHorario` = ?, `titulo` = ?, `idEstado` = ?, `descripcion` = ?, `FechaActualizada` = NOW() WHERE `idCita` = ?");
        $stmt->bind_param("iiissssi", $_POST['id_tatuador'], $_POST['id_usuario'], $_POST['id_cotizacion'], $_POST['id_horario'], $_POST['titulo'], $_POST['estadocita'], $_POST['descripcion'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        break;
}

$conn->close();
