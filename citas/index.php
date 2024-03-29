<?php
session_start();
if (!isset($_SESSION["idUsuario"])) {
  header("Location: ../login");
  die();
}
include('../conexion/cone.php');

$SQL = "SELECT * FROM COTIZACIONES WHERE usuario = {$_SESSION['idUsuario']}";
$exeSQL = mysqli_query($conn, $SQL);
?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Victoria Tatto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/color/default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet">

</head>
<style>
  .custom-button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #28a745;
    /* Color verde Bootstrap */
    color: #fff;
    cursor: pointer;
  }
</style>

<body>
  <?php
  include "../navbar.php"
  ?>
  <!-- section intro -->
  <main>
    <div class="container">
      <div class="row">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading"><br>
            <h3><span>Panel De Control</span></h3>
          </div>
          <div class="sub-heading">
            <p></p>
          </div>
        </div>
        <section>
          <div class="col-md-6">
            <h4><i class="icon-envelope"></i><strong>Mis cotizaciones</strong></h4><br>
            <div style="overflow-y: auto; max-height: 270px;"> <!-- Ajusta la altura máxima según tus necesidades -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Identificador</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tatuador</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($rows = $exeSQL->fetch_assoc()) {
                    $idcotizacioon = $rows['idcotizacioon'];
                    $fechahora = $rows['fechahora'];
                    $tatuadorNumero = $rows['tatuador'];
                    $descripcion = $rows['descripcion'];

                    // Consulta para obtener el nombre del tatuador
                    $consultaTatuador = "SELECT * FROM USUARIOS WHERE idUsuario = $tatuadorNumero";
                    $resultadoTatuador = mysqli_query($conn, $consultaTatuador);

                    if ($resultadoTatuador && $filaTatuador = mysqli_fetch_assoc($resultadoTatuador)) {
                      $tatuadorNombre = $filaTatuador['nombre'];
                    } else {
                      $tatuadorNombre = "Nombre no encontrado";
                    }
                  ?>
                    <tr>
                      <th scope="row"><?php echo $idcotizacioon; ?></th>
                      <td><?php echo $fechahora; ?></td>
                      <td><?php echo $tatuadorNombre; ?></td>
                      <td><?php echo $descripcion; ?></td>
                      <td>
                        <div style="padding-top:5px;">
                          <button class="btn btn-secondary btn-ms "><a class="" href="./index.php?action=agendar&id=<?php echo $rows['idcotizacioon']; ?>&tatuador=<?php echo $rows['tatuador'] ?>">Agendar</a></button>
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
          <!-- segunta tabla -->
          <div class="col-md-6">
            <h4><i class="icon-envelope"></i><strong>Mis Citas</strong></h4><br>
            <div style="overflow-y: auto; max-height: 270px;"> <!-- Ajusta la altura máxima según tus necesidades -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section id="agendar">
          <div class="col-md-8 col-md-offset-2">
            <div class="heading"><br>
              <h3><span>Generar Cita</span></h3>
            </div>
            <div class="sub-heading">
              <p>Seleccionar Fecha y Hora para la Cita</p>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-2" style="border: 1px solid white; border-radius: 6px;">
            <form action="agendar" method="POST">
              <?php
              if (isset($_GET['action']) && $_GET['action'] === 'agendar' && isset($_GET['id'])) {
                $idcotizacioon = $_GET['id'];
                $tatuador = $_GET['tatuador'];

              ?>
                <div class="row">
                  <div class="col-md-6 form-group text-center">
                    <label for="">Inserte el "ID" de su cotizacion</label>
                    <input type="number" class="form-control text-center" name="id_coti" id="id_coti" value="<?php echo $idcotizacioon; ?>" readonly>

                  </div>
                  <div class="col-md-6 form-group text-center">
                    <label for="">Tatuador</label><br>
                    <!-- Determinar que type ira para la base de datos -->
                    <input type="text" class="form-control text-center" value="<?php echo $tatuador; ?>" readonly>
                  </div>
                  <input type="text" value="" id="id_user" hidden>


                </div>
                <div class="col-md-8 col-md-offset-2 form-group text-center">
                  <label for="fecha">Fecha:</label>
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control text-center" id="fecha" readonly>
                    <div class="input-group-addon">
                      <i class="fa-solid fa-calendar"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-md-offset-3 text-center form-group">
                  <label for="hora">Hora</label><br>
                  <select name="hora" id="hora" class="form-group custom-input">
                    <option value="0">Seleccione:</option>
                    <?php
                    $query_horarios = "SELECT * FROM HORARIOS";
                    $result_horarios = mysqli_query($conn, $query_horarios);

                    while ($horario = mysqli_fetch_array($result_horarios)) {
                      echo '<option value="' . $horario['idhorario'] . '">' . $horario['horarioinicio'] . ' - ' . $horario['horariofin'] . '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center form-group ">
                  <input type="submit" class="btn btn-block custom-button" style="border-radius: 5px;" value="Programar cita">

                </div>
            </form>
          <?php
              }
          ?>
          </div>
        </section>
        <section>
          <div class="col-md-8 col-md-offset-2">
            <div class="heading"><br>
              <h3><span>Mis Datos personales</span></h3>
            </div>
            <div class="sub-heading">
              <p></p>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-2 text-center">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 form-group">
                  <label>Nombre(s)</label>
                  <input type="text" name="nombre" class="form-control custom-input" id="nombre" value="<?php echo $_SESSION["nombre"]; ?>" />
                </div>

              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Apellido Paterno</label>
                  <input type="text" name="apellidopaterno" class="form-control custom-input" id="apellidopaterno" value="<?php echo $_SESSION["apaterno"]; ?>" required />
                </div>
                <div class="col-md-6 form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="apellidomaterno" class="form-control custom-input" id="apellidomaterno" value="<?php echo $_SESSION["amaterno"]; ?>" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Teléfono Celular</label>
                  <input type="text" name="telefono" class="form-control custom-input" id="telefono" required value="<?php echo $_SESSION["telefono"]; ?>" />
                </div>
                <div class="col-md-6 form-group">
                  <label>Correo electronico</label>
                  <input type="email" class="form-control custom-input" name="correo" data-rule="email" value="<?php echo $_SESSION["correo"]; ?>" readonly />
                </div>
              </div>
              <div class="row">


              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 form-group text-center">
                  <input type="submit" class="btn btn-lg btn-theme" value="Actualizar">

                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-md-12 text-right">
                <a><button class="btn btn-danger">Eliminar cuenta</button> </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </main>
  <!-- end section contact -->
  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy; ProOnliPc Theme - All right reserved
              </p>
              <div class="credits">

                <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc
                  Themes</a> by <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>



  <script>
    $(document).ready(function() {
      $('#fecha').change(function() {
        var fechaSeleccionada = $(this).val();
        console.log('Fecha seleccionada:', fechaSeleccionada);

        // Realiza una petición AJAX para obtener los horarios disponibles según la fecha
        $.ajax({
          url: './horarios.php', // Reemplaza con la URL correcta de tu script PHP
          method: 'POST',
          data: {
            fecha: fechaSeleccionada
          },
          success: function(response) {
            // Limpia las opciones actuales
             $('#hora').empty();
            console.log(response)
            // Agrega las nuevas opciones
             $('#hora').append(response);
          }
        });
      });
    });
  </script>
  <!-- <script>
    $(document).ready(function() {
      // Configurar el datepicker con el formato deseado
      $('#fecha').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy' // Cambia el formato a tu preferencia
      });

      // Asociar el evento change al campo de fecha utilizando datepicker
      $('#fecha').on('changeDate', function(e) {
        // Obtener la fecha seleccionada y convertirla al formato deseado
        var fechaSeleccionada = moment(e.date).format('YYYY-MM-DD');
        console.log('Fecha seleccionada:', fechaSeleccionada);

        // Realiza una petición AJAX para obtener los horarios disponibles según la fecha
        $.ajax({
          url: './horarios.php', // Reemplaza con la URL correcta de tu script PHP
          method: 'POST',
          data: {
            fecha: fechaSeleccionada
          },
          success: function(response) {
            console.log('Respuesta del servidor:', response);
            // Limpia las opciones actuales
            $('#hora').empty();

            // Agrega las nuevas opciones
            $('#hora').append(response);
          },
          error: function(xhr, status, error) {
            console.error('Error en la solicitud AJAX:', error);
          }
        });
      });
    });
  </script> -->



</body>

</html>