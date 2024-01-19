<?php
// Conexión a la base de datos y otras configuraciones necesarias
include './conexion/cone.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Obtén la fecha seleccionada del formulario
$fechaSeleccionada = $_POST['fecha'];

// Consulta SQL para obtener horarios disponibles en la fecha seleccionada
$query = "SELECT * FROM CITAS WHERE fecha = '$fechaSeleccionada'";
$result = mysqli_query($conn, $query);

// Genera opciones de hora en formato HTML
$options = '<option value="0">Seleccione:</option>';
while ($horario = mysqli_fetch_array($result)) {
   $options .= '<option value="' . $horario['idhorario'] . '">' . $horario['horainicio'] . ' - ' . $horario['horafin'] . '</option>';
}

echo $options;
?>
