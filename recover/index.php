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
    padding: 21px;
    margin-bottom: 15px;
    border: 2px solid #1a0c0c;
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
</style>

<body>
  <?php
  include "../navbar.php"
  ?>
  <br><br>
  <!-- section intro -->
  <main>
    <div class="container">
      <div class="row">
      </div>
    </div>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading"><br>
            <h3><span>Recuperar Contraseña</span></h3>
          </div>
          <div class="sub-heading">
            <p>Una vez ingresado su correo electrónico, se le enviará un código de verificación para asegurar que usted
              es el propietario.</p>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3 mt-3">
          <form action="" method="POST">
            <div class="text-right">
              <a href="../">Regresar</a>
            </div>
            <div class="mb-3">
              <label class="form-label">Correo Electrónico</label>
              <input type="email" placeholder="Ingrese su correo electrónico" class="form-control custom-input" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div><br>
            <div class="col-md-8 col-md-offset-2">
              <button type="button" class="btn btn-block custom-button" style="border-radius: 5px">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main><br><br>
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






</body>

</html>