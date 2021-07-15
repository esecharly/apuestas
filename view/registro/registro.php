<div class="container py-3">
    <div class="row pt-5">
        <div class="col text-center">
            <h1 class="fw-bold">Crea tu cuenta</h1>
        </div>
    </div>
    <div class="row pt-5 justify-content-around">
        <div class="col-md-7 bg-light-gray py-5 rounded  border border-secondary">
            <form action="" method="post" id="frmRegistrar" name="frmRegistrar">
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="nombreUsuario" class="form-label fw-light">Nombre de Usuario</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control fw-light" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de usuario" required>
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
                            <input type="password" class="form-control fw-light" id="passwordUsuario" name="passwordUsuario" placeholder="Contraseña de usuario" required>
                            <div class="invalid-feedback">
                                Por favor escribe una contraseña valida
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="correoUsuario" class="form-label fw-light">Correo Electrónico</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" class="form-control fw-light" id="correoUsuario" name="correoUsuario" placeholder="ejemplo@mail.com" required>
                            <div class="invalid-feedback">
                                Por favor escribe un correo electrónico valido
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="nombrePersonal" class="form-label fw-light">Nombre(s)</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control fw-light" id="nombrePersonal" name="nombrePersonal" placeholder="Nombre personal" required>
                            <div class="invalid-feedback">
                                Por favor escribe tu nombre personal
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="apellidoPaterno" class="form-label fw-light">Apellido Paterno</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control fw-light" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                            <div class="invalid-feedback">
                                Por favor escribe tu apellido paterno
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="apellidoMaterno" class="form-label fw-light">Apellido Materno</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control fw-light" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido Materno" required>
                            <div class="invalid-feedback">
                                Por favor escribe tu apellido materno
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-4">
                            <label for="fechaNacimiento" class="form-label fw-light">Fecha de nacimiento</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control fw-light" id="fechaNacimiento" name="fechaNacimiento" required>
                            <div class="invalid-feedback">
                                Por favor escribe una fecha de nacimiento valida
                            </div>
                            <div class="valid-feedback">
                                Luce bien!
                            </div>
                        </div>
                    </div>
                    <div class="row py-4 justify-content-around">
                        <div class="col-md-10 text-center">
                            <div class="d-grid pb-3">
                                <span class="btn btn-success font-slenco fs-5" id="btnRegistrar">Registrarse</span>
                            </div>
                            <p class="fw-light">¿Ya tienes una cuenta?</p>
                            <a href="login" class="fw-light">Inicia sesión aquí</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?=SERVIDOR;?>controller/funciones_registro.js"></script>