<?php
header("Content-Type: application/json");
/*

INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES (NULL, 'Evento 1', 'Develoteca aniversario', '#13ec3e', '2022-01-03 18:48:35', '2022-01-03 18:48:35');

*/
$pdo= new PDO("mysql:host=localhost;dbname=victor51_towal","root","");


$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){

    case 'leer':
        
        $sentenciaSQL= $pdo->prepare("SELECT idCita as id, CONCAT (u.nombre ,' ' , u.paterno) as title, e.Color as color, `descripcion`,  TIMESTAMP(c.FechaReserva, h.horarioinicio) as start ,TIMESTAMP(c.FechaReserva, h.horariofin) as end
        FROM CITAS c
        INNER JOIN HORARIOS h ON h.idhorario = c.idHorario 
        INNER JOIN ESTADO_CITAS e on e.id_estado = c.idEstado
        INNER JOIN USUARIOS u on u.idUsuario = c.idUsuario");

        $sentenciaSQL->execute();
        $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($resultado));


    break;
    case 'agregar':
        
        $sentenciaSQL= $pdo->prepare(" INSERT INTO `CITAS`( `idTatuador`, `idUsuario`, `idCotizacion`, `idHorario`, `titulo`, `idEstado`, `descripcion`, `FechaRegistro`, `FechaReserva`, `FechaActualizada`, `USUARIOAGENDO`) VALUES (30,1,7,1,'lkjhgfdsa',4,'hjshsjhshjs',now(),'2024-01-25','30')
        ");
        $sentenciaSQL->execute( array(
            "title"=>$_POST['title'], 
            "descripcion"=>$_POST['descripcion'],
            "start"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "end"=>$_POST['fecha']." ".$_POST['hora'].":00"
        ) );
        print_r("exit");
    break;
    case "borrar":
        $sentenciaSQL= $pdo->prepare("DELETE FROM `tbleventos` WHERE `id`=:id");
        $sentenciaSQL->execute( array(
            "id"=>$_POST['id']
        ) );
        print_r($_POST);
    break;
    case "actualizar":
        $sentenciaSQL= $pdo->prepare("UPDATE `tbleventos` SET `title`=:title,`descripcion`=:descripcion,`color`=:color,`start`=:start,`end`=:end WHERE `id`=:id");
       
        $sentenciaSQL->execute( array(
            "title"=>$_POST['title'], 
            "descripcion"=>$_POST['descripcion'],
            "color"=>$_POST['color'],
            "start"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "end"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "id"=>$_POST['id']
        ) );
        
        print_r($_POST);
    break;


}





?> 