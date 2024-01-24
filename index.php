<?php
session_start();
include "./conexion/cone.php"

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vicoria Tatto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link rel="stylesheet" href="./assets/css/fancybox/jquery.fancybox.css">
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link href="./assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/slippry.css">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/color/default.css">
  <script src="./assets/js/modernizr.custom.js"></script>
</head>
<style>
  .custom-input {
    width: 100%;
    padding: 9px;
    margin-bottom: 15px;
    border: 2px solid #1a0c0c;
    border-radius: 5px;
    text-align: center;
    font-size: 17px;

  }

  .custom-button {
    margin-top: 4%;
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
  include "./navbar.php"
  ?>
  <!-- section intro -->
  <section id="intro">
    <ul id="slippry-slider">
      <li>
        <a href="#slide1"><img src="assets/img/slide/1.jpg" alt="Bienvenidos a ProOnliPc Tutoriales!"></a>
      </li>
      <li>
        <a href="#slide2"><img src="assets/img/slide/2.jpg" alt="Like al Video para mas"></a>
      </li>
      <li>
        <a href="#slide3"><img src="assets/img/slide/3.jpg" alt="Suscribete al canal <span class='red'>♥</span>  :)"></a>
      </li>
    </ul>
  </section>
  <!-- end intro -->
  <!-- Section about -->
  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Nosotros</span></h3>
          </div>
          <div class="sub-heading">
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color:#c7c7c7">
              Creating a visual language around the beliefs of the brands we work with.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team1.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Baby Stewards Jr</strong></h5>
              <p>
                CEO - Founder
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team2.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Tommy Kreunichev</strong></h5>
              <p>
                Lead designer
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team3.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Moriella Maccini</strong></h5>
              <p>
                Customer support
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/team4.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>Brian James Scoothie</strong></h5>
              <p>
                Coffee maker
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->
  <!-- section works -->
  <section id="works" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Recent works</span></h3>
          </div>
          <div class="sub-heading">
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color:#c7c7c7">
              We have a history of doing what our name implies, creating a visual language around the beliefs of the
              brands we work with.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="grid effect" id="grid">
            <li>
              <a class="fancybox" data-fancybox-group="gallery" title="Portfolio name" href="../assets/img/portfolio/1.jpg">
                <img src="../assets/img/portfolio/1.jpg" alt="" />
              </a>
            </li>
            <li><a href="assets/img/portfolio/2.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/2.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/3.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/3.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/4.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/4.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/5.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/5.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/6.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/6.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/7.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/7.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/8.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/8.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/9.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/9.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/10.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/10.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/11.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/11.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/12.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/12.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/13.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/13.jpg" alt="" /></a></li>
            <li><a href="assets/img/portfolio/14.jpg" class="fancybox" data-fancybox-group="gallery" title="Portfolio name"><img src="assets/img/portfolio/14.jpg" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->
  <!-- section cotizacion -->

  <section id="cotizacion" class="section">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Cotiza tu tatuaje</span></h3>
          </div>
          <div class="sub-heading">
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color:#c7c7c7">Llena el siguiente formulario para solicitar una cotización de tu próximo tatuaje.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="border: 1px solid white; border-radius: 5px;">
          <h4><i class="icon-envelope"></i><strong>Contactanos</strong></h4>
          <p>Para poder realizar una cotización, inicia sesión o regístrate, para asi, brindarte la mejor atención posible.</p>
          <div class="" id="contact-form">
            <form action="./cotizacion.php" method="POST" enctype="multipart/form-data">
              <div class="form-group hidden">
                <input type="number" name="usuariosolicita" class="form-control" id="idUsuario" value="<?php echo $_SESSION["idUsuario"]; ?>"/>
              </div>
              <div class="row col-md-8 col-md-offset-2">
                <label>Seleciona al Tatuador</label>
                <select name="tatuador" id="tatuador" class="form-group custom-input">
                  <option value="0">Seleccione:</option>
                  <?php
                  $user = ("SELECT * FROM USUARIOS WHERE tipoUsuario=2");
                  $resul = mysqli_query($conn, $user);
                  while ($valores = mysqli_fetch_array($resul)) {
                    echo '<option value="' . $valores['idUsuario'] . '">' . $valores['nombre'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="row col-md-8 col-md-offset-2 text-center">
                <img id="imgPreview" height="180" class="mx-auto" alt="Previsualización">
                <br><input type="file" name="imagen" id="fileInput" accept="image/*" onchange="previewImage(event, '#imgPreview')" />
                <br>
                <input type="text" name="imagen64" id="file64" hidden/>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Color del tatuaje</label>
                  <select name="color" id="color" class="form-group custom-input">
                    <option value="0">Seleccione:</option>
                    <?php
                    $user = ("SELECT * FROM COLORES");
                    $resul = mysqli_query($conn, $user);
                    while ($valores = mysqli_fetch_array($resul)) {
                      echo '<option value="' . $valores['idcolor'] . '">' . $valores['color'] . '</option>';
                    }
                    ?>
                  </select>

                </div>
                <div class="col-md-6">
                  <div>
                    <label>Zona del cuerpo</label>
                    <select name="zonacuerpo" id="zonabody" class="form-group custom-input">
                      <option value="0">Seleccione:</option>
                      <?php
                      $user = ("SELECT * FROM ZONASCUERPO");
                      $resul = mysqli_query($conn, $user);
                      while ($valores = mysqli_fetch_array($resul)) {
                        echo '<option value="' . $valores['idzonacuerpo'] . '">' . $valores['zonacuerpo'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-md-offset-2">
                <label for="">Ingresa el tamaño del tatuaje en centimetros</label>
                <input type="number" name="tamano" class="form-control custom-input" id="size" placeholder="Solo Digitos" style="border-radius: 4px;" />
              </div>

              <div class="col-md-12">
                <label for="">Añade una descripción detallada sobre tu tatuaje</label>
                <textarea class="custom-input" name="description" id="" cols="15" rows="2" placeholder="Descripción"></textarea>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <input type="submit" class="custom-button" value="Enviar">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section cotizacion -->
  <!-- section contact -->
  <section id="contact" class="section gray">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
          <div class="heading">
            <h3><span>Locacion</span></h3>
          </div>
          <div class="sub-heading">
            <p style="font-family: Georgia, 'Times New Roman', Times, serif; color:#c7c7c7">Aqui Tienes una forma de</p>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center">
          <img src="../assets/img/slide/2.jpg" alt="" class="mx-auto d-block img-fluid" style="width: 100%;">
        </div>
      </div>
    </div>
  </section>
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
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>
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
    function previewImage(event, querySelector) {
      // Recuperamos el input que desencadenó la acción
      const input = event.target;

      // Recuperamos la etiqueta img donde cargaremos la imagen
      const $imgPreview = document.querySelector(querySelector);

      // Verificamos si existe una imagen seleccionada
      if (!input.files.length) {
        $imgPreview.src = ''; // Si no hay imagen, limpiamos la previsualización
        return;
      }

      // Recuperamos el archivo subido
      const file = input.files[0];

      // Creamos la URL
      const objectURL = URL.createObjectURL(file);

      // Modificamos el atributo src de la etiqueta img
      $imgPreview.src = objectURL;
    }
  </script>



  <script src="./assets/js/custom.js"></script>

</body>

</html>