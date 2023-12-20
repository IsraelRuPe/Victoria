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
            <h3><span>Iniciar Sesion</span></h3>
          </div>
          <div class="sub-heading">
            <p></p>
          </div>
        </div>
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Bienvenido</strong></h4>
          <p>Ingrese su correo y contraseña</p><b></b>

          <form>
            <div class="mb-3 form-group">
              <label class="form-label">Correo Electronico</label>
              <input type="email" class="form-control custom-input" placeholder="Correo Electronico" id="exampleInputEmail1"
                aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group">
              <label for="Password">Contraseña</label>
              <div class="input-group">
                  <input type="password" class="form-control custom-input" id="password"
                      name="password" placeholder="Contraseña" required>
                  <span class="input-group-addon eye-icon"
                      onclick="togglePassword('password')">👁️</span>
              </div><br>
          </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <div class="col-md-6 mb-3 text-right">
                <a href="../recover/index.html">¿Olvidaste tu contraseña?</a>
              </div>
            </div><br>
            <div class="col-md-8 col-md-offset-2">
              <button type="button" class="btn btn-block btn-success" style="border-radius: 5px">Iniciar</button>
            </div><br><br>
            <div>
              <p>¿No tienes una cuenta? <a href="./registro.html">Crear una cuenta</a></p>
            </div>
          </form>

        </div>

        <div class="col-md-6 text-center">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <img src="../assets/img/slide/2.jpg" alt="" class="mx-auto d-block img-fluid" style="width: 100%;">
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
                  Themes</a> by <a
                  href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw/featured?view_as=subscriber">ProOnliPc</a>
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