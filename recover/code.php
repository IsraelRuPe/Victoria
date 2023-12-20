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
    padding: 25px;
    margin-bottom: 15px;
    border: 2px solid #1a0c0c;
    border-radius: 35px;
    text-align: center;
  }

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

  </header><br><br>
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
            <h3><span>Codigo de verificación</span></h3>
          </div>
          <div class="sub-heading">
            <p>Ingrese el código que le fue enviado para comprobar su identidad y posteriormente cambiar su contraseña.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3 mt-3">
          <form action="" method="POST">
            <div class="text-right">
              <a href="../">Regresar</a>
            </div>
            <div class="mb-3">
              <label class="form-label">Código (solo números, 5 dígitos)</label>
              <input type="number" pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" class="form-control custom-input" id="exampleInputCode" required>
              <small id="codeHelp" style="font-size: 18px;" class="form-text text-muted">Ingrese solo números y asegúrese de que haya exactamente 5 dígitos.</small>
          </div>
          <br>
            <div class="col-md-8 col-md-offset-2">
              <button type="button" class="btn btn-block custom-button" style="border-radius: 5px;">Continuar</button>
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
</body>
</html>