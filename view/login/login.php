<div class="container py-3">
    <div class="row pt-5">
        <div class="col text-center">
            <h1 class="fw-bold">Iniciar sesión</h1>
        </div>
    </div>
    <div class="row pt-5 justify-content-around">
        <div class="col-md-7 bg-light-gray py-5 rounded  border border-secondary">
            <form action="" method="post" id="frmLogin">
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="nombreUsuario" class="form-label fw-light">Nombre de Usuario</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control fw-light" id="nombreLogin" name="nombreLogin" placeholder="Nombre de usuario" required>
                            <div class="invalid-feedback">
                                Por favor escribe un nombre de usuario valido
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="passwordUsuario" class="form-label fw-light">Contraseña</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control fw-light" id="passwordLogin" name="passwordLogin" placeholder="Contraseña de usuario" required>
                            <input type="password" class="form-control fw-light" id="funcion" name="funcion" value="0" hidden>
                            <div class="invalid-feedback">
                                Por favor escribe una contraseña valida
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4 justify-content-around">
                        <div class="col-md-10">
                            <div class="d-grid ">
                                <span class="btn btn-success font-slenco fs-5" id="btnLogin">Iniciar sesión</span>
                            </div>
                        </div>
                    </div>
                    <div class="row py-3 justify-content-around">
                        <div class="col-md-10 text-center">
                            <p class="fw-light">¿No tienes una cuenta?</p>
                            <a href="registro" class="fw-light">Registrate aquí</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?=SERVIDOR;?>controller/funciones_login.js"></script>
