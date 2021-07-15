<nav class="navbar navbar-expand-lg navbar-dark bg-gray fs-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio"><img src="img/betking-logo.png" width="170" height="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="deportes">Deportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Esports</a>
                </li>
                <?php if (!empty($_SESSION['user'])):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-1"> </i><?= $_SESSION['user']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#" id="btnCerrarSesion">Cerrar sesión</a></li>
                        </ul>
                    </li>
                <?php else: ?>  
                    <li class="nav-item ms-3">
                        <a class="btn btn-success fs-5" href="login">Acceder</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-outline-success fs-5" href="registro">Registrarse</a>
                    </li>  
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<script src="<?=SERVIDOR;?>controller/funciones_sesion.js"></script>