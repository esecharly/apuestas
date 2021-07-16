<?php if(!empty($_SESSION['user'])): ?>
    <div class="container">
        <div class="row pt-3 justify-content-around">
            <div class="col-md-9 text-gray text-center">
                <h1 >Bienvenido de nuevo <?=$_SESSION['user']; ?></h1>
                <p><h2 class="fw-bold">¿Listo para comenzar a ganar?</h2></p>
                <p><h2>Elige una categoria para ver los nuevos eventos disponibles</h2></p>
            </div>
        </div>
        <div class="row pt-4 justify-content-around">
            <div class="col-md-6 text-center">
                <a href="deportes" class="link-dark">
                    <i class="fas fa-futbol fa-10x"></i>
                    <p><h2 class="font-slenco">Deportes</h2></p>
                </a>
            </div>
            <div class="col-md-6 text-center">
                <a href="#" class="link-dark">
                    <i class="fas fa-gamepad fa-10x"></i>
                    <p><h2 class="font-slenco">Esports</h2></p>
                </a>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-5 text-gray">
                <h1 >Bienvenido a la comunidad más grande de apuestas en México y Estados Unidos</h1>
                <p><h2 class="fw-bold">Registrate ahora y apuesta por tu equipo favorito</h2></p>
                <p><a href="registro" class="btn btn-success font-slenco fs-2">Registrarme ahora</a></p>
            </div>
            <div class="col-md-7">
                <img src="raw/img/sports.png" width="700" height="400" alt="">
            </div>
        </div>
    </div>
<?php endif; ?>    