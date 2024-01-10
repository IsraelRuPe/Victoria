<?php
session_start();
// if (!isset($_SESSION["idUsuario"]) || (isset($_SESSION["idUsuario"]) && $_SESSION["tipoUsuario"] == 3)) {
//     header("Location: /");
//     die();
// }
include('./php/conexion.php');
 $SQL = "SELECT * FROM COTIZACIONES";
$exeSQL = mysqli_query($conn, $SQL);
?> 
<?php
// session_start();
// include('../conexion/cone.php');
// $idusuario = $_SESSION["idUsuario"];
// $idcotizacion = $_GET["idcotizacioon"];
// $SQL = "select  idcotizacioon as idcotizacion, fechahora as fecha, usuario.nombre,  concat(usuario.paterno, ' ', usuario.materno) as apellido , usuario.telefono,usuario.correo,tamano,zonascuerpo.zonacuerpo,colores.color,descripcion,imagen 
// from COTIZACIONES 
// inner join USARIOSU as usuario on cotizaciones.usuario = usuario.idUsuario
// inner join USARIOSU as tatuador on cotizaciones.tatuador = tatuador.idUsuario
// inner join COLORES on cotizaciones.color = colores.idcolor
// inner join ZONASCUERPO on cotizaciones.zonacuerpo = zonascuerpo.idzonacuerpo 
// where tatuador.idUsuario = $idusuario";
// $exeSQL = mysqli_query($conn, $SQL);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Victoria Tatto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <?php include "nav.php"; ?>
        <!-- Content Start -->
        <div class="content">
            <!-- Spinner End -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todas las notificaciones</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo  $_SESSION["nombre"]?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mi Perfil</a>
                            <a href="../cerrarsesion.php" class="dropdown-item">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Sale & Revenue Start -->
            <main>
                <section>
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-md-6 offset-md-3 text-center font-family-cursive">
                                <h1> Tus Cotizaciones</h1>
                                <span>Victoria Tatto</span>
                            </div>

                        </div>
                    </div>
                </section>
                <section>
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="rounded h-100 p-4">
                                    <h6>Cotizaciones</h6>
                                    <div class="row col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">fecha</th>
                                                        <th scope="col">Nombre y Apelido</th>
                                                        <th scope="col">Telefono</th>
                                                        <th scope="col">Correo electronico</th>
                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">imagen</th>
                                                        <th scope="col">Opciones</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($rows = $exeSQL->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $rows['idcotizacion']; ?></th>
                                                            <td><?php echo $rows['fecha']; ?></td>
                                                            <td><?php echo $rows['nombre'] . ' ' . $rows['apellido']; ?></td>
                                                            <td><?php echo $rows['telefono']; ?></td>
                                                            <td><?php echo $rows['correo']; ?></td>
                                                            <td><?php echo $rows['descripcion']; ?></td>
                                                            <td><img src="<?php echo base64_decode($rows['imagen']); ?>" alt="" width="100" height="100"></td>
                                                            <td>
                                                                <div style="padding-top:5px;">
                                                                    <button type="button" class="btn btn-secondary btn-ms" data-bs-toggle="modal" data-bs-target="#modalReply" id="btnView">Ver Más</button>
                                                                    <button class="btn btn-secondary btn-ms "><a class="" href="/cotizacioness/eliminar.php?idcotizacion=<?php echo $rows['idcotizacion']; ?>">Eliminar</a></button>

                                                                </div>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div id="modalReply" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Cotización</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeModalBtn"></button>
                                </div>
                               
                                    <div class="modal-body" id="modalBody">
                                        <form>
                                            <div class="mb-3">
                                                <img src="" alt="" width="100" height="100">
                                            </div>
                                            <div class="col-md-6 offset-md-3">
                                                <label class="col-form-label">Tinta</label>
                                                <input type="text" class="form-control" id="" value="<?php echo $rows['color']; ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="message-text" class="col-form-label">Tamaño</label>
                                                    <input type="text" class="form-control" id="" value="<?php echo $rows['tamano']; ?>">

                                                </div>
                                                <div class="col-6">
                                                    <label class="col-form-label">Zona en el Cuerpo</label>
                                                    <input type="text" class="form-control" id="" value="<?php echo $rows['zonacuerpo']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="col-form-label">Descripcion</label>
                                                <textarea class="form-control" id="" value="<?php echo $rows['descripcion']; ?>"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-body oculto" id="modalAnswer">
                                        <form>
                                            <div class="mb-3">
                                                <label class="col-form-label">Correo Destinatario</label>
                                                <input type="text" class="form-control" id="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">Correo Remitente</label>
                                                <input type="text" class="form-control" id="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">Mensaje de respuesta a cotizacion</label>
                                                <textarea class="form-control" id=""></textarea>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" id="btnAnswer">Responder</button>
                                        <button type="button" class="btn btn-success oculto" id="btnBack">Regresar</button>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cotizaciones.js"></script>
</body>

</html>