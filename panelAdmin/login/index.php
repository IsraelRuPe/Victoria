<?php
session_start();
if (isset($_SESSION["idusuario"])) {
  header("Location: /");
  die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estudio Tatto Ángeles </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="../assets/css/stylee.css" type="text/css" media="all" />

</head>

<body>

    <section class="w3l-forms-23">
        <div class="forms23-block-hny">
            <div class="wrapper">
                <a href="../index.php">
                    <h1>Estudio Tatto Victoria Ángeles</h1>
                </a>
                <div class="d-grid forms23-grids">
                    <div class="form23">
                        <div class="main-bg">
                            <h6 class="sec-one">Iniciar Sesion</h6>
                            <div class="speci-login first-look">
                                <img src="../assets/img/user.png" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="bottom-content">
                            <form action="login.php" method="POST">
                                <label for="exampleInputEmail1">Ingrese correo</label>
                                <input type="email" class="input-form" id="exampleInputEmail1" name="Correologin" aria-describedby="emailHelp" placeholder="Correo electronico">
                                <?php
                                if (isset($_GET['error']) && $_GET['error'] == 1) {

                                    echo "<p style=\"color:red\" ;>Usuario o Contrseña incorrecta, ingrese datos correctos</p>";
                                }

                                ?>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="input-form" id="exampleInputPassword1" placeholder="Contraseña" name="Contrasenalogin">
                                </div>
                                <button type="submit" class="loginhny-btn btn">iniciar sesion</button>
                            </form>
                            <p>Olvidaste tu contraseña? <a href="../restablecer/index.php">Restablecer contraseña</a></p>
                            <p>No tienes una cuenta? <a href="../registro/index.php">Registrate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //login-section -->
</body>

</html>