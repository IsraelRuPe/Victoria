<?php

include('./conexion/cone.php');

if (isset($_POST['tatuador'], $_POST['usuariosolicita'],$_POST['color'], $_POST['tamano'],$_POST['zonacuerpo'],$_POST['description'], $_POST['imagen64'])){
    $tatuador= ($_POST['tatuador']);
    $usuariosolicita = ($_POST['usuariosolicita']);
    $color = ($_POST['color']);
    $tamano = ($_POST['tamano']);
    $zonacuerpo = ($_POST['zonacuerpo']);
    $descripcion = ($_POST['description']);
    $imagen = base64_encode ($_POST['imagen64']);
}
else{
   //header("Location: index.php");
   echo "<script> alert(\"faltan datos\");
    location.href = \"index.php\";
    </script>";
  echo $_POST['tatuador']. $_POST['usuariosolicita']. $_POST['color']. $_POST['tamano'].$_POST['zonacuerpo']. $_POST['tamano']. $_POST['descripcion']. $_POST['imagen'];
    die();
}
$SQL = "INSERT INTO COTIZACIONES (fechahora,usuario,tatuador,zonacuerpo,tamano,color,descripcion,imagen)
VALUES (now(),'$usuariosolicita','$tatuador','$zonacuerpo','$tamano','$color','$descripcion','$imagen');";
$exeSQL = mysqli_query($conn, $SQL);

if ($exeSQL) {
    echo "<script> alert(\"cotizacion enviada\");
    location.href = \"/index.php\";
    </script>";
} else {
    echo "<script> alert(\"Error\");
    location.href = \"index.php\";
    </script>";
}
?>

