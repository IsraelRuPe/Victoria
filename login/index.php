<?php
session_start();
if (isset($_SESSION["idUsuario"])) {
  header("Location: ../citas");
  die();
}
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
</head>
<style>
  .custom-input {
    width: 100%;
    padding: 20px;
    margin-bottom: 15px;
    border: 1px solid #1a0c0c;
    border-radius: 35px;
    text-align: center;
    font-size: 17px;
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

  body {

    background-image: url('../assets/img/slide/hec.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  img {
    filter: grayscale(1);
    width: 80%;
    opacity: 1;
    border-radius: 5px;
  }

  img:hover {
    filter: grayscale(0);
  }

  figure {
    margin: 20px 0;
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
          <div class="heading"  style="margin-top: 13%">
            <h3><span>Iniciar </span><span> Sesion</span></h3>
          </div>
          <div class="sub-heading">
            <p></p>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <h4><i class="icon-envelope"></i><strong>Bienvenido</strong></h4>
          <p>Ingrese su correo y contraseña</p><b></b>

          <form action="./login.php" method="POST">
            <div class="col-md-12 form-group">
              <label class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control custom-input" placeholder="Correo Electrónico" id="exampleInputEmail1" name="loginemail" aria-describedby="emailHelp">
              <?php
              if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style=\"color:red\" ;>Usuario o Contraseña incorrecta, ingrese datos correctos</p>";
              }
              ?>
            </div>
            <div class="col-md-12 form-group">
              <label for="Password">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control custom-input" id="password" name="passlogin" placeholder="Contraseña" required>
                <span class="input-group-addon eye-icon" onclick="togglePassword('password')">👁️</span>
              </div><br>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <div class="col-md-6  text-right">
                <a href="../recover/index.php">¿Olvidaste tu contraseña?</a>
              </div>
            </div><br>
            <div class="col-md-8 col-md-offset-2">
              <button type="submit" class="btn btn-block btn-success" style="border-radius: 5px">Iniciar</button>
            </div><br><br>
            <div>
              <p>¿No tienes una cuenta? <a href="./registro.php">Crear una cuenta</a></p>
            </div>
          </form>

        </div>

        <div class="col-md-6 text-center">
          <figure>
            <img class="mx-auto d-block img-fluid" src="../assets/img/portfolio/girl03.jpg" alt="">
          </figure>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.nav.js"></script>

  <script>
    function togglePassword(inputId) {
      const passwordInput = document.getElementById(inputId);
      passwordInput.type = (passwordInput.type === "password") ? "text" : "password";
    }
  </script>




</body>

</html>