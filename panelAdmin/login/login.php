<?php
session_start();
include('../conexion/cone.php');

if (isset($_POST['Correologin'], $_POST['Contrasenalogin'])){

    $contrasena = ($_POST['Contrasenalogin']);
    $correo = ($_POST['Correologin']);

}
else{
  header("Location: index.php");
  
   die();
}
$SQL = "SELECT idUsuario,correo,telefono,nombre,paterno,materno,GENEROS.genero, GENEROS.idGenero, fechaNacimiento, TIPOS_USUARIO.tipoUsuario, TIPOS_USUARIO.idTipoUsuario
FROM USUARIOS
inner join  TIPOS_USUARIO on USUARIOS.tipoUsuario = TIPOS_USUARIO.idTipoUsuario
inner join	GENEROS on USUARIOS.genero = GENEROS.idGenero
WHERE   correo='$correo' && contrasenia='$contrasena';";
$exeSQL = mysqli_query($conn, $SQL);
$validarUsuario =  mysqli_num_rows($exeSQL);

if ($validarUsuario==1) {
    $arrayUsu = mysqli_fetch_array($exeSQL);
    $_SESSION["idUsuario"]=$arrayUsu['idUsuario'];
    $_SESSION["correo"]=$arrayUsu['correo'];
    $_SESSION["telefono"]=$arrayUsu['telefono'];
    $_SESSION["nombre"]=$arrayUsu['nombre'];
    $_SESSION["apaterno"]=$arrayUsu['paterno'];
    $_SESSION["amaterno"]=$arrayUsu['materno'];
    $_SESSION["genero"]=$arrayUsu['genero'];
    $_SESSION["idGenero"]=$arrayUsu['idGenero'];
    $_SESSION["tipoUsuario"]=$arrayUsu['tipoUsuario'];
    $_SESSION["idTipoUsuario"]=$arrayUsu['idTipoUsuario'];
    $_SESSION["fechaNacimiento"]=$arrayUsu['fechaNacimiento'];

   
    header("Location: ../../panel");
} else {

    echo "<script>
    location.href = \"/login/?error=1\";
    </script>";
}
