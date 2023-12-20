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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"
    rel="stylesheet">

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
  <header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">ProOnliPc</a>
        </div>

        <div class="navigation">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.navbar-collapse -->
        </div>

      </div>
    </div>

  </header>
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
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- segunta tabla -->
          <div class="col-md-6">
            <h4>Mis citas</h4><br>
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
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section>
          <div class="col-md-8 col-md-offset-2">
            <div class="heading"><br>
              <h3><span>Generar Cita</span></h3>
            </div>
            <div class="sub-heading">
              <p>Seleccionar Fecha y Hora para la Cita</p>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-2" style="border: 2px solid  palegreen; border-radius: 6px;">
            <form action="" method="POST">

              <div class="row">
                <div class="col-md-6 form-group text-center">
                  <label for="">Inserte el "ID" de su cotizacion</label>
                  <input type="number" class="form-control text-center name=" id="id_coti" readonly>
                </div>
                <div class="col-md-6 form-group text-center">
                  <label for="">Tatuador</label><br>
                  <!-- Determinar que type ira para la base de datos -->
                  <input type="text" class="form-control text-center" readonly>
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
                <label>Hora</label><br>
                <select name="zonacuerpo" id="zonabody" class="form-group custom-input">
                  <option value="0">Seleccione:</option>
                  <!-- <?php
                      $user = ("SELECT * FROM ZONASCUERPO");
                      $resul = mysqli_query($conn, $user);
                      while ($valores = mysqli_fetch_array($resul)) {
                        echo '<option value="' . $valores['idzonacuerpo'] . '">' . $valores['zonacuerpo'] . '</option>';
                      }
                      ?> -->
                </select>
              </div>
              <div class="col-md-4 col-md-offset-4 text-center form-group ">
                <button type="button" class="btn btn-block custom-button" style="border-radius: 5px;">Programar
                  cita</button>
              </div>
            </form>
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
          <div class="col-md-12">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Nombre(s)</label>
                  <input type="text" name="nombre" class="form-control custom-input" id="nombre" required />
                </div>
                <div class="col-md-6 form-group">
                  <label>Genero</label><br>
                  <input type="text" value="" class="form-control custom-input" id="" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Apellido Paterno</label>
                  <input type="text" name="apellidopaterno" class="form-control custom-input" id="apellidopaterno"
                    data-rule="minlen:4" required />
                </div>
                <div class="col-md-6 form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="apellidomaterno" class="form-control custom-input" id="apellidomaterno"
                    data-rule="minlen:4" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Teléfono Celular</label>
                  <input type="text" name="telefono" class="form-control custom-input" id="telefono" required />
                </div>
                <div class="col-md-6 form-group">
                  <label>Fecha de nacimiento</label>
                  <input type="date" class="form-control custom-input" id="fechaNacimiento" name="fechaNacimiento"
                    min="1930-01-01" max="2030-12-31" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Correo electronico</label>
                  <input type="email" class="form-control custom-input" name="correo" data-rule="email" readonly />
                </div>
                <div class="col-md-6 form-group">
                  <label>Contraseña</label>
                  <div class="input-group ">
                    <input type="password" class="form-control custom-input" id="password" name="newPassword" required>
                    <span class="input-group-addon eye-icon" onclick="togglePassword('password')">👁️</span>
                  </div>
                </div>
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
                  Themes</a> by <a
                  href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.nav.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      });
    });
  </script>



</body>

</html>