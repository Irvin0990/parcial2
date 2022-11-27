<nav class="navbar navbar-expand-lg navbar-primary bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img  src="../img/logo.png" width="200 px" height="50 px"  alt=". . .">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>

                
            </ul>


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION["usuario"])) {       ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php  echo  $_SESSION["nombre"]    ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrarSesion") . "" ?>">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                <?php } else {                 ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") . "" ?>" tabindex="-1">Login</a>
                    </li>
                <?php   }  ?>
            </ul>
            <form action="<?php echo "index.php?c=" . seg::codificar("producto") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="Search" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::generarToken() ?>" name="token">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

        </div>
    </div>
</nav>