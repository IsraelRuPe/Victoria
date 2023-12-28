<?php

//session_start();

include('../conexion/cone.php');

if (isset( $_POST['nombre'], $_POST['apellidopaterno'], $_POST['apellidomaterno'], $_POST['telefono'], $_POST['fechaNacimiento'],$_POST['genero'],$_POST['correo'], $_POST['contrasena'],)){
    $nombre = ($_POST['nombre']);
    $apellidopaterno = ($_POST['apellidopaterno']);
    $apellidomaterno = ($_POST['apellidomaterno']);
    $telefono = ($_POST['telefono']);
    $fechanaci = ($_POST['fechaNacimiento']);
    $genero = ($_POST['genero']);
    $correo = ($_POST['correo']);
    $contrasena = ($_POST['contrasena']);

    /*Foreach($_POST as $campo => $valor){
        echo "- ". $campo ." = ". $valor;
      }*/
}
else{
   header("Location: ../registro");


}
$SQL = "insert into USUARIOS(correo, contrasenia, nombre, paterno, materno, fechaNacimiento, genero, tipoUsuario, fechaRegistro,telefono)
VALUES ('$correo','$contrasena','$nombre','$apellidopaterno','$apellidomaterno','$fechanaci','$genero','3',now(),'$telefono');";
echo $SQL;
$exeSQL = mysqli_query($conn, $SQL);


if ($exeSQL) {


    $SQL2 = "SELECT LAST_INSERT_ID() as idusuario; ";
    $exeSQL2 = mysqli_query($conn, $SQL2);
    $arrayUsu = mysqli_fetch_array($exeSQL2);
    $_SESSION["idusuario"]=$arrayUsu['idusuario'];
    $_SESSION["nombre"]=$nombre;
    $_SESSION["apaterno"]=$apellidopaterno;
    $_SESSION["amaterno"]=$apellidomaterno;
    $_SESSION["telefono"]=$telefono;
    $_SESSION["correo"]=$correo;
    
    
    header(
        "Location: ../login/index.php");
} else {
    echo "<script>
    location.href = \"/registro/?error=1\";
    </script>";
}
