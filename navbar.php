<header>
    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php">Estudio Ángeles</a>
        </div>

        <div class="navigation">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <!-- nav inicio-->

                <li><a id="index" href="/">Inicio</a></li>
                <li><a id="nosotros" href="#about">nosotros</a></li>
                <li><a id="trabajos" href="#works">Ideas Tatuajes</a></li>
                <li><a id="informes" href="#contact">Información</a></li>
                <li><a id="cotiza" href="#contact">solicitar cotización</a></li>
                <li><a id="login" href="/login/"><?php echo (isset($_SESSION["idUsuario"])) ?  "Tú perfil " . $_SESSION["nombre"] : "Iniciar Sesión"; ?></a></li>      
                <?php echo (isset($_SESSION["idUsuario"])) ? "<li><a href =\"./cerrarsesion.php\" id=\"cerrar\">Cerrar sesion</a></li>" : ""; ?>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </header>
</body>

<script>
   document.getElementById("login").onclick = function() {
    location.href = "/login/";
  };
  document.getElementById("index").onclick = function() {
    location.href = "index.php";
  };
  document.getElementById("cerrar").onclick = function() {
    location.href = "../cerrarsesion.php";
  };

</script>
 <script>

document.getElementById("nosotros").onclick = function() {
    location.href = "../index.php#about";
  };
  document.getElementById("trabajos").onclick = function() {
    location.href = "../index.php#works";
  };  
  document.getElementById("cotiza").onclick = function() {
    location.href = "../index.php#cotizacion";
  };
  document.getElementById("informes").onclick = function() {
    location.href = "../index.php#contact";
  };
</script>
<!-- <script>
   document.getElementById("login").onclick = function() {
    location.href = "/login/";
  };
  document.getElementById("index").onclick = function() {
    location.href = "index.php";
  };
  
</script>
<script>
  document.getElementById("vercoti").onclick = function() {
    location.href = "/cotizacioness/";
  };
  document.getElementById("agenda").onclick = function() {
    location.href = "/agenda/";
  };
  document.getElementById("perfil").onclick = function() {
    location.href = "/perfil/";
  };
</script>
<script>
  document.getElementById("cotiza").onclick = function() {
    location.href = "/solicotizaciones/";
  };
</script>

<script>
   document.getElementById("tatu").onclick = function() {
    location.href = "/tatuadores/";
  };

  document.getElementById("cotiza").onclick = function() {
    location.href = "/solicita";
  };
</script>


<script>
  
  document.getElementById("registrotatua").onclick = function() {
    location.href = "/registrota/";
  };

  document.getElementById("datos").onclick = function() {
    location.href = "/perfil/index.php";
  };
 
</script> -->

</html>