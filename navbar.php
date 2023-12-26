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
                <li><a id="nosotros" href="#nosotros">nosotros</a></li>
                <li><a id="trabajos" href="#trabajos">Ideas Tatuajes</a></li>
                <li><a id="informes" href="#informes">Informacion</a></li>
                <li><a id="cotiza" href="/solicotizaciones/">solicitar cotizacion</a></li>
                <li><a id="login" href="/login/"><?php echo (isset($_SESSION["idUsuario"])) ?  "Hola! " . $_SESSION["nombre"] : "Iniciar Sesión"; ?></a></li>
                <?php
                if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == 2) {

                  echo <<<EOT
                  <li><a id="vercoti" href="/cotizacioness/">Ver Cotizacion</a></li>
                  <li><a id="agenda" href="/agenda/">Agendar Cita</a></li>
                  <li class="current"><a id="perfil" href="/perfil/">Datos personales</a></li>
                  EOT;
                } else if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == 3){
                  echo <<<EOT
                 
                  <li class="current"><a id="perfilusuario" href="/perfil/">Datos personales</a></li>
  

                  <li><a id="slicita" href="/solicita/">solicitar cita</a></li>
                  <li><a href="#works">informacion Del Estudio</a></li>
                  EOT;
                }else if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == 1){
                  echo <<<EOT
                  <li class="current"><a id="registrotatua" href="/registrota">Registrar Tatuador</a></li>
                  <li><a id="tatu" href="/tatuadores/"> Informacion de Tatuadores</a></li>
                  <li><a id="agenda" href="/solicita/">Agendar Cita</a></li>
                  <li class="current"><a id="perfilusuario" href="/perfil/">Perfil</a></li>
                  <li><a id="responder" href="/cotizacioness/">Ver cotizacion</a></li>
                  <li><a id="usuarios" href="/usuarios/">Usuarios</a></li>
                  EOT;
                }
                ?>     
                
                <?php echo (isset($_SESSION["idUsuario"])) ? "<li><a href =\"../cerrarsesion.php\" id=\"cerrar\">Cerrar sesion</a></li>" : ""; ?>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </header>
</body>
<!-- <script>
document.getElementById("slicita").onclick = function() {
    location.href = "../solicita/";
  };
  document.getElementById("usuarios").onclick = function() {
    location.href = "../usuarios/";
  };

   document.getElementById("cerrar").onclick = function() {
    location.href = "../cerrarsesion.php";
  };
</script>
<script>
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