<?php
session_start();
//  if (!isset($_SESSION["idUsuario"]) || $_SESSION["tipoUsuario"]== "cliente") {
//     header("Location: ../index.php");
//     die();
// }
include "../conexion/cone.php"
?>
<!DOCTYPE html>
<html lang="es">

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

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    <style>
        .custom-input {
            width: 100%;
            padding: 5.5px;
            margin-bottom: 9px;
            border: 1px solid #1a0c0c;
            border-radius: 5px;
            text-align: center;
            font-size: 17px;

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
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo  $_SESSION["nombre"] ?></span>
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
            <br>
            <main>
                <div class="container">
                    <div class="row col-md-8 offset-md-2">
                        <div id='calendar'></div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalEvento">
                        Launch
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Datos del evento </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">

                                        <form action="" method="post">

                                            <div class="mb-3 visually-hidden ">
                                                <label for="id" class="form-label">ID:</label>
                                                <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
                                            </div>

                                            <div class="mb-3">
                                                <label for="titulo" class="form-label">Título</label>
                                                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Título">

                                            </div>
                                            <div class="mb-3 visually-hidden">
                                                <label for="" class="form-label">Fecha:</label>
                                                <input type="text" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha:">

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">ID Usuario</label>
                                                    <input type="number" class="form-control" name="id_usuario" id="id_usuario" aria-describedby="helpId">

                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">ID Cotizacion</label>
                                                    <input type="number" class="form-control" name="id_cotizacion" id="id_cotizacion" aria-describedby="helpId">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="horario" class="form-label">Selecciona un horario</label>
                                                    <select name="hora" id="hora" class="form-group custom-input">
                                                        <option value="0">Selecciona:</option>
                                                        <?php
                                                        $query_horarios = "SELECT * FROM HORARIOS";
                                                        $result_horarios = mysqli_query($conn, $query_horarios);

                                                        while ($horario = mysqli_fetch_array($result_horarios)) {
                                                            echo '<option value="' . $horario['idhorario'] . '">' . $horario['horarioinicio'] . ' - ' . $horario['horariofin'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="horario" class="form-label">Selecciona el Estado</label>
                                                    <select name="estadocita" id="estadocita" class="form-group custom-input">
                                                        <option value="0">Selecciona:</option>
                                                        <?php
                                                        $query_Estados = "SELECT * FROM ESTADO_CITAS";
                                                        $result_Estados = mysqli_query($conn, $query_Estados);

                                                        while ($Estado = mysqli_fetch_array($result_Estados)) {
                                                            echo '<option value="' . $Estado['id_estado'] . '">' . $Estado['Estado'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="descripcion" class="form-label">Descripción</label>
                                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="color" class="form-label">Color:</label>
                                                <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="Color:">

                                            </div>

                                        </form>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="borrarEvento()" class="btn btn-danger" id="btnBorrar" data-bs-dismiss="modal">Borrar</button>
                                    <button type="button" onclick="agregarEvento()" id="btnGuardar" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        var modalEvento;

        modalEvento = new bootstrap.Modal(document.getElementById('modalEvento'), {
            keyboard: false
        });
        var calendar;

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: "es",
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                dateClick: function(informacion) {

                    limpiarFormulario(informacion.dateStr);
                    // alert("Presionaste "+informacion.dateStr);
                    modalEvento.show();

                },
                eventClick: function(informacion) {
                    console.log(informacion);
                    modalEvento.show();
                    recuperarDatosEvento(informacion.event);

                },
                events: "./agenda/api.php"

            });
            calendar.render();
        });
    </script>
    <script>
        function recuperarDatosEvento(evento) {
            limpiarErrores();
            var fecha = evento.startStr.split("T");
            var hora = fecha[1].split(":");

            document.getElementById('id').value = evento.id;
            document.getElementById('titulo').value = evento.title;
            document.getElementById('fecha').value = fecha[0];
            document.getElementById('hora').value = hora[0] + ":" + hora[1];
            document.getElementById('descripcion').value = evento.extendedProps.descripcion;
            document.getElementById('color').value = evento.backgroundColor;

            document.getElementById('btnBorrar').removeAttribute('disabled', "");
            document.getElementById('btnGuardar').removeAttribute('disabled', "");


        }

        function borrarEvento() {
            enviarDatosApi("borrar");

        }

        function agregarEvento() {

            if (document.getElementById('titulo').value == "") {
                document.getElementById('titulo').classList.add('is-invalid');
                return true;
            }



            accion = (document.getElementById("id").value == 0) ? "agregar" : "actualizar";
            enviarDatosApi(accion);

        }

        function enviarDatosApi(accion) {
            fetch("./agenda/api.php?accion=" + accion, {
                    method: "POST",
                    body: recolectarDatos()
                })
                .then(data => {
                    console.log(data);
                    calendar.refetchEvents();
                    modalEvento.hide();
                })
                .catch(error => {
                    console.log(error);
                });
        }

        function recolectarDatos() {
            var evento = new FormData();
            evento.append("title", document.getElementById('titulo').value);
            evento.append("fecha", document.getElementById('fecha').value);
            evento.append("hora", document.getElementById('hora').value);
            evento.append("descripcion", document.getElementById('descripcion').value);
            evento.append("color", document.getElementById('color').value);
            return evento;
        }

        function limpiarFormulario(fecha) {
            limpiarErrores();
            document.getElementById('titulo').value = "";
            document.getElementById('fecha').value = fecha;
            document.getElementById('hora').value = "12:00";
            document.getElementById('descripcion').value = "";
            document.getElementById('color').value = "";
            document.getElementById('id').value = "";
            document.getElementById('btnBorrar').setAttribute('disabled', "disabled");
        }

        function limpiarErrores() {
            document.getElementById('titulo').classList.remove('is-invalid');
        }
    </script>

</body>

</html>