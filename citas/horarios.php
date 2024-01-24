<?php
include '../conexion/cone.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// fecha seleccionada del formulario
// $fechaSeleccionada = $_POST['fecha'];

$fechaSeleccionada = date("Y-m-d", strtotime($_POST['fecha']));

$query = " SELECT h.horarioinicio, h.horariofin
FROM HORARIOS h
LEFT JOIN CITAS c ON h.idhorario = c.idHorario AND c.FechaReserva = '$fechaSeleccionada'
WHERE c.idCita IS NULL";

$result = mysqli_query($conn, $query);

// Genera opciones de hora en formato HTML
$options = '<option value="0">Seleccione:</option>';
while ($horario = mysqli_fetch_array($result)) {
   $options .= '<option value="' . $horario['idhorario'] . '">' . $horario['horarioinicio'] . ' - ' . $horario['horariofin'] . '</option>';
}

echo $options;
?>
