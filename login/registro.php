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
</head>
<style>
  .custom-input {
    width: 100%;
    padding: 18px;
    margin-bottom: 15px;
    border: 2px solid #1a0c0c;
    text-align: center;
    font-size: 16px;
  }

  .custom-inputt {
    width: 100%;
    padding: 9px;
    margin-bottom: 15px;
    border: 2px solid #1a0c0c;
    text-align: center;
    font-size: 14px;
  }

  .custom-button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #28a745;
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
      </div><br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Registrarse</span></h3>
          </div>
          <div class="sub-heading">
            <p></p>
          </div>
        </div>


        <div class="col-md-6 text-center">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <img src="../assets/img/slide/2.jpg" alt="" class="mx-auto d-block img-fluid" style="width: 100%;">
        </div>
        <div class="col-md-6">
          <h4 class="text-center"><i class="icon-envelope"></i><strong>Registar usuario</strong></h4>
          <!-- inicio registro usuario -->
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Nombre(s)</label>
                <input type="text" name="nombre" class="form-control custom-input" id="nombre" required />
              </div>
              <div class="col-md-6" text-align="center">
                <label>Elige tu Genero</label>
                <select name="genero" id="genero" class="custom-inputt form-group">
                  <option value="0">Seleccione:</option>
                  <option value="value2" selected>Value 2</option>
                  <option value="value3">Value 3</option>
                </select>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label>Apellido Paterno</label>
                <input type="text" name="apellidopaterno" class="form-control custom-input" id="apellidopaterno" data-rule="minlen:4" required />
              </div>
              <div class="col-md-6 form-group">
                <label>Apellido Materno</label>
                <input type="text" name="apellidomaterno" class="form-control custom-input" id="apellidomaterno" data-rule="minlen:4" required />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Teléfono Celular</label>
                <input type="text" name="telefono" class="form-control custom-input" id="telefono" required />
              </div>
              <div class="col-md-6 form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" class="form-control custom-input" id="fechaNacimiento" name="fechaNacimiento" min="1930-01-01" max="2030-12-31" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Correo electronico</label>
                <input type="email" class="form-control custom-input" name="correo" data-rule="email" required />
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
              <div class="col-md-6 mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Aceptar politica de privacidad</label>
                </div>
              </div>

            </div><br>
            <div class="form-group text-center">
              <input type="submit" class="btn btn-lg btn-theme" value="Registarse">
            </div>
          </form>
        </div>
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
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.nav.js"></script>
  <script>
    function togglePassword(inputId) {
      const passwordInput = document.getElementById(inputId);
      passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    }
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var form = document.querySelector('form');

      form.addEventListener('submit', function(event) {
        // Validación para que ningún campo vaya vacío
        var inputs = form.querySelectorAll('input, select');
        for (var i = 0; i < inputs.length; i++) {
          if (!inputs[i].value) {
            alert('Por favor, complete todos los campos.');
            event.preventDefault();
            return;
          }
        }

        // Validación para la fecha de nacimiento mayor o igual a 18 años
        var fechaNacimiento = new Date(document.getElementById('fechaNacimiento').value);
        var hoy = new Date();
        var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
        if (hoy.getMonth() < fechaNacimiento.getMonth() || (hoy.getMonth() === fechaNacimiento.getMonth() && hoy.getDate() < fechaNacimiento.getDate())) {
          edad--;
        }
        if (edad < 18) {
          alert('Debe tener al menos 18 años para registrarse.');
          event.preventDefault();
          return;
        }

        // Validación para el número de teléfono (solo números y longitud de 10)
        var telefono = document.getElementById('telefono').value;
        if (!/^\d{10}$/.test(telefono)) {
          alert('Ingrese un número de teléfono válido.');
          event.preventDefault();
          return;
        }

        // Validación para la contraseña (más de 8 dígitos y al menos una letra y un número)
        var password = document.getElementById('password').value;
        if (password.length < 8 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
          alert('La contraseña debe tener al menos 8 caracteres y contener tanto letras como números.');
          event.preventDefault();
          return;
        }

        // Validación para el checkbox
        var checkbox = document.getElementById('exampleCheck1');
        if (!checkbox.checked) {
          alert('Debe aceptar la política de privacidad.');
          event.preventDefault();
        }
      });
    });
  </script>




</body>

</html>