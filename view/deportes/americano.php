<div class="container">
        <div class="row pt-3 justify-content-around">
            <div class="col-md-12 text-center">
                <h3 class="fw-bold bg-light-dark text-white py-1">Próximos partidos</h3>
                <table class="table table-striped table-hover" id="tablaAmericanoProximos">
                    <thead>
                        <tr>
                            <th>Equipo 1</th>
                            <th>Equipo 2</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Apostar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row pt-5 justify-content-around">
            <div class="col-md-12 text-center">
                <h3 class="fw-bold bg-light-dark text-white py-1">Partidos pasados</h3>
                <table class="table table-striped table-hover" id="tablaAmericanoPasados">
                    <thead>
                        <tr>
                            <th>Equipo 1</th>
                            <th>Equipo 2</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Apostar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="<?=SERVIDOR;?>controller/funciones_cargarTablaAmericano.js"></script>