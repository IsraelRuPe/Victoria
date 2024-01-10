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
    </style>
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
                                <button id="openuser" type="button" class="btn btn-warning" data-bs-toggle="modal">Añadir
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
                                                    <button class="btn btn-secondary btn-ms "><a class="table__item__link" href="/login/deleteuser.php?idUsuario=<?php echo $rows['idUsuario']; ?>">Eliminar</a></button>
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
                                    <form action="../login/registrouser.php" method="POST" id="formuser">
                                        <input type="hidden" name="redireccion" value="../panelAdmin/usuarios.php">
                                        <div class="form-group">
                                            <label>Nombre(s)</label>
                                            <input type="text" name="nombre" class="form-control" id="username">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="message-text" class="col-form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name="apellidopaterno" id="apellidopaterno">

                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name="apellidomaterno" id="apellidomaterno">
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
                                                <input type="text" class="form-control" name="telefono" id="telefono">
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-3 form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input type="date" class="form-control custom-input" id="fechaNacimiento" name="fechaNacimiento" min="1930-01-01" max="2030-12-31" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" name="correo" class="form-control" id="usermail1">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <div class="input-group align-items-center">
                                                <input type="password" class="form-control custom-input" id="password" name="contrasena" required>
                                                <span style="margin-left: 5px;" class="input-group-addon eye-icon" onclick="togglePassword('password')">
                                                    <i class="bi-eye"></i>
                                                </span>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                </form>
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

        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
        }

    
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('formuser').addEventListener('submit', function(event) {
                // Recolectar los datos del formulario
                let nombre = document.getElementById('username').value;
                let apellidopaterno = document.getElementById('apellidopaterno').value;
                let apellidomaterno = document.getElementById('apellidomaterno').value;
                let genero = document.getElementById('genero').value;
                let telefono = document.getElementById('telefono').value;
                let fechaNacimiento = document.getElementById('fechaNacimiento').value;
                let correo = document.getElementById('usermail1').value;
                let contrasena = document.getElementById('password').value;

                // Validacion(es) Campos vacios
                if (nombre === '' || apellidopaterno === '' || apellidomaterno === '' || genero === '0' || telefono === '' || fechaNacimiento === '' || correo === '' || contrasena === '') {
                    alert('Por favor, completa todos los campos correctamente.');
                    event.preventDefault();
                }
                let fechaNacimientoDate = new Date(fechaNacimiento);
                let hoy = new Date();
                let edadMinima = 18;

                if (hoy.getFullYear() - fechaNacimientoDate.getFullYear() < edadMinima) {
                    alert('Debes tener al menos 18 años para registrarte.');
                    event.preventDefault();
                }

                if (telefono.length !== 10) {
                    alert('El número de teléfono debe tener exactamente 10 dígitos.');
                    event.preventDefault();
                    return;
                }

                if (contrasena.length < 8 || !/\d/.test(contrasena) || !/[a-zA-Z]/.test(contrasena)) {
                    alert('La contraseña debe tener al menos 8 caracteres y contener tanto letras como números.');
                    event.preventDefault();
                }
            });

        });
    </script>

    <!-- <script>
    $(document).ready(function () {
        // Manejar el envío del formulario
        $('#formuser').submit(function (event) {
            // Prevenir el envío del formulario por defecto
            event.preventDefault();

            // Obtener el correo del formulario
            var correo = $('#usermail1').val();

            // Realizar la verificación asíncrona usando Ajax
            $.ajax({
                type: 'POST',
                url: '/login/registrouser.php', // Cambiado a ruta absoluta
                data: {
                    correo: correo
                },
                success: function (response) {
                    // El servidor ha respondido con el resultado de la verificación

                    if (response == 'existente') {
                        // El correo ya está registrado, mostrar una alerta
                        alert('¡Error! El correo ya está registrado.');
                    } else {
                        // El correo no está registrado, puedes continuar con el proceso de registro
                        alert('¡Correo disponible! Puedes proceder con el registro.');
                        // Aquí puedes agregar código adicional si es necesario
                    }
                },
                error: function (xhr, status, error) {
                    // Manejar errores en la comunicación con el servidor
                    console.error('Error en la comunicación con el servidor:', error);
                    // Puedes mostrar una alerta más específica aquí si lo prefieres
                    alert('Error en la comunicación con el servidor. Consulta la consola para más detalles.');
                }
            });
        });
    });
</script> -->



</body>

</html>