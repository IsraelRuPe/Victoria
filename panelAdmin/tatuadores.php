<?php
session_start();
include('../conexion/cone.php');

$stmt = $conn->prepare("SELECT * FROM USUARIOS WHERE tipoUsuario != 3");
$stmt->execute();
$result = $stmt->get_result();
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
    <style>
        .custom-inputt {
            width: 100%;
            padding: 7px;
            margin-bottom: 10px;
            border: 1px solid #1a0c0c;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
        }

        .inputlog {
            text-align: center;
            background-color: #ffff;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <?php
        include "nav.php";
        ?>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->

            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"></h2>
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
            <main>
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="ms-3">
                                <button id="opentatu" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar
                                    <i class="bi bi-person-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="col-sm-6 col-xl-3">
                                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                    <div class="card">
                                        <img src="<?php echo base64_decode($row['userphoto']); ?>" alt="" width="100%" height="100%">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['apodo']; ?></h5>
                                            <p class="card-text"><?php echo $row['nombre']  . ' ' . $row['paterno'] . ' ' . $row['materno']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        $stmt->close();
                        ?>
                    </div>
                </div>

                <section>
                    <div class="modal fade" id="modaltatu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Registar Tatuador</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <form action="/login/registrotatu.php" method="POST" enctype="multipart/form-data">
                                        <div class="row col-md-6 offset-md-3">
                                            <img id="imgPreview" height="180" style="border-radius: 50% 20% / 10% 40%;">
                                            <input type="text" name="imagen64" id="file64" hidden />
                                            <input type="hidden" name="redireccion" value="../panelAdmin/tatuadores.php">
                                        </div>
                                        <div class="row col-md-6 offset-md-3">
                                            <p>Tipo Usuario</p>

                                            <select name="Tipouser" id="Tipouser" class="form-group custom-inputt" onchange="mostrarImagenInput()" required>
                                                <option value="0">Seleccione:</option>
                                                <?php
                                                include("../conexion/cone.php");
                                                $user = ("SELECT * FROM TIPOS_USUARIO WHERE idTipoUsuario != 3");
                                                $resul = mysqli_query($conn, $user);
                                                while ($valores = mysqli_fetch_array($resul)) {
                                                    echo '<option value="' . $valores['idTipoUsuario'] . '">' . $valores['tipoUsuario'] . '</option>';
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <div class="row col-md-6 offset-md-3">
                                            <label for="formFileSm" class="form-label">Foto de Perfil</label>
                                            <input class="form-control form-control-sm" name="imagen" id="fileInput" type="file" accept="image/*" onchange="previewImage(event, '#imgPreview')">
                                        </div>
                                        <div class="form-group col-md-8 offset-md-2">
                                            <label for="message-text">Apodo</label>
                                            <input type="text" class="form-control inputlog" name="apodo" id="apodo">
                                        </div>
                                        <div class="form-group col-md-8 offset-md-2">
                                            <label for="message-text">Nombre(s)</label>
                                            <input type="text" class="form-control inputlog" name="nombre" id="nombre">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="message-text" class="col-form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control inputlog" name="Apaterno" id="Apaterno">
                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label">Apellido Materno</label>
                                                <input type="text" class="form-control inputlog" name="Amaterno" id="Amaterno">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Genero: </p>
                                                <p>
                                                    <select name="genero" id="genero" class="form-group custom-inputt" onchange="mostrarImagenInput()" required>
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
                                                <input type="text" class="form-control inputlog" name="telefono" id="telefono">
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-3 form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input type="date" class="form-control inputlog custom-input" id="fechaNacimiento" name="fechaNacimiento" min="1930-01-01" max="2030-12-31" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control inputlog" name="correo" id="tatumail1">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <div class="input-group align-items-center">
                                                <input type="password" class="form-control inputlog custom-input" id="password" name="contrasena" required>
                                                <span style="margin-left: 5px;" class="input-group-addon eye-icon" onclick="togglePassword('password')">
                                                    <i class="bi-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                                </form>
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
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        const fileInput = document.getElementById("fileInput");
        let imagen64 = document.getElementById("file64");
        fileInput.addEventListener("change", e => {
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", () => {
                imagen64.value = reader.result;
            })

            reader.readAsDataURL(file);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('opentatu').addEventListener('click', function() {
                let miModal = new bootstrap.Modal(document.getElementById('modaltatu'));
                miModal.show();
            });

        });

        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
        }


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
    </script>
</body>

</html>