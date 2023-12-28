<?php
session_start();
// if (!isset($_SESSION["idUsuario"]) || (isset($_SESSION["idUsuario"]) && $_SESSION["tipoUsuario"] == 3)) {
//     header("Location: /");
//     die();
// }
include('./php/conexion.php');
$SQL = "SELECT *, TIMESTAMPDIFF(YEAR, fechaNacimiento, CURDATE()) AS edad FROM USUARIOS WHERE tipoUsuario=3";
$exeSQL = mysqli_query($conn, $SQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vicroria Tatto</title>
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
        <?php
        include "nav.php";
        ?>
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
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
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo  $_SESSION["nombre"] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mi perfil</a>
                            <a href="../cerrarsesion.php" class="dropdown-item">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <main>
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="ms-3">
                                <button id="openuser" type="button" class="btn btn-warning" data-bs-toggle="modal" >Añadir
                                    <i class="bi bi-person-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blank Start -->
                <section>
                    <div class="container-fluid pt-4 px-4">
                        <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                            <table class="table table-success table-striped-columns">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nombres y Apellidos</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($rows = $exeSQL->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $rows['idUsuario']; ?></th>
                                            <td><?php echo $rows['nombre'] . ' ' . $rows['paterno'] . ' ' . $rows['materno']; ?></td>
                                            <td><?php echo $rows['telefono']; ?></td>
                                            <td><?php echo $rows['correo']; ?></td>
                                            <td><?php echo $rows['edad'] . ' años  '; ?></td>

                                            <td>
                                                <div style="padding-top:5px;">
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
                </section>
                <section>
                    <div class="modal fade" id="modaluser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Registar Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="row col-md-6 offset-md-3 oculto">
                                            <img id="imgPreview" height="180" style="border-radius: 50% 20% / 10% 40%;">
                                        </div>
                                        <div id="" class="row col-md-6 offset-md-3 oculto ">
                                            <label for="formFileSm" class="form-label">Foto de Perfil</label>
                                            <input class="form-control form-control-sm" id="formFileSm" type="file" accept="image/*" onchange="previewImage(event, '#imgPreview')">
                                        </div>
                                        <div class=" row col-6">
                                            <p>Tipo Usuario:
                                                <select name="Usuarios" id="tipoUsuario" class="form-group">
                                                    <option value="0">Seleccione:</option>
                                                    <?php
                                                    include("../conexion/cone.php");
                                                    $user = ("SELECT * FROM TIPOS_USUARIO");
                                                    $resul = mysqli_query($conn, $user);
                                                    while ($valores = mysqli_fetch_array($resul)) {
                                                        echo '<option value="' . $valores['idTipoUsuario'] . '">' . $valores['tipoUsuario'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre(s)</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="message-text" class="col-form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="usersurnamefather" value="<?php echo $rows['tamano']; ?>">

                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="usersurname" value="<?php echo $rows['zonacuerpo']; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Elige tu Genero: </p>
                                                <p>
                                                    <select name="genero" id="genero" class="form-group" onchange="mostrarImagenInput()">
                                                        <option value="0">Seleccione:</option>
                                                        <?php
                                                        include("../conexion/cone.php");
                                                        $user = ("SELECT * FROM GENEROS");
                                                        $resul = mysqli_query($conn, $user);
                                                        while ($valores = mysqli_fetch_array($resul)) {
                                                            echo '<option value="' . $valores['idGenero'] . '">' . $valores['genero'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label">Telefono</label>
                                                <input type="text" class="form-control" id="usersurname" value="<?php echo $rows['zonacuerpo']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="usermail1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="userpassword">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 p-4">
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
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('openuser').addEventListener('click', function() {
                let miModal = new bootstrap.Modal(document.getElementById('modaluser'));
                miModal.show();
            });

        });

        function previewImage(event, querySelector) {

            //Recuperamos el input que desencadeno la acción
            const input = event.target;

            //Recuperamos la etiqueta img donde cargaremos la imagen
            $imgPreview = document.querySelector(querySelector);

            // Verificamos si existe una imagen seleccionada
            if (!input.files.length) return

            //Recuperamos el archivo subido
            file = input.files[0];

            //Creamos la url
            objectURL = URL.createObjectURL(file);

            //Modificamos el atributo src de la etiqueta img
            $imgPreview.src = objectURL;

        }

        function mostrarImagenInput() {
            var tipoUsuario = document.getElementById("tipoUsuario");
            var imagenInput = document.getElementById("imagenInput");

            if (tipoUsuario.value === "tatuador") {
                imagenInput.classList.remove("ocultar");
            } else {
                imagenInput.classList.add("ocultar");
            }
        }
    </script>
</body>

</html>