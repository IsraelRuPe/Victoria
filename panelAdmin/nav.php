<?php
session_start();
?>
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <h3 style="color: white; margin-left:5px; margin-bottom:20px;"><img src="../assets/img/Tt.png" height="35"> Victoria Tatto</h3>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo  $_SESSION["nombre"] ?></h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a id="pag1" class="nav-item nav-link" href="index.php"><i class="fa fa-tachometer-alt me-2"></i>Panel de Control</a>
            <?php
            if ($_SESSION["tipoUsuario"] == "administrador") {
                echo <<<TEXT
                <div class="nav-item dropdown">
                <a id="pag2" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="bi bi-person-fill"></i> Usuarios</a>
                <div class="dropdown-menu bg-transparent border-0">
                <a id="pag3" href="tatuadores.php" class="dropdown-item">Tatuadores</a>
                <a id="pag4" href="usuarios.php" class="dropdown-item">Clientes</a>
                </div>
                </div>
                TEXT;
            }
            ?>
            <a id="pag5" class="nav-item nav-link" href="agenda.php"><i class="fa fa-th me-2"></i>Agenda</a>
            <a id="pag6" class="nav-item nav-link" href="cotizaciones.php"><i class="fa fa-keyboard me-2"></i>Cotizaciones</a>
            <a id="pag7" class="nav-item nav-link" href="table.html"><i class="fa fa-table me-2"></i>Tables</a>
            <a id="pag8" class="nav-item nav-link" href="galeria.php"><i class="fa fa-chart-bar me-2"></i>Galeria</a>
        </div>


    </nav>
</div>

<!-- Sidebar End -->
<!-- 
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentPage = window.location.pathname;
        
        for (let i = 1; i <= 8; i++) {
            const link = document.getElementById(`pag${i}`);
            const linkHref = link.getAttribute('href');
            console.log (link   )
            if (currentPage.endsWith(linkHref)) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        }
    });
</script> -->