<div class="container">
        <div class="row pt-3 justify-content-around">
            <div class="col-md-12 text-center">
                <h3 class="fw-bold bg-light-dark text-white py-1">Próximas peleas</h3>
                <table class="table table-striped table-hover" id="tablaBoxProximos">
                    <thead>
                        <tr>
                            <th>Peleador 1</th>
                            <th>Peleador 2</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Categoría</th>
                            <th>Apostar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row pt-5 justify-content-around">
            <div class="col-md-12 text-center">
                <h3 class="fw-bold bg-light-dark text-white py-1">Peleas pasadas</h3>
                <table class="table table-striped table-hover" id="tablaBoxPasados">
                    <thead>
                        <tr>
                            <th>Peleador 1</th>
                            <th>Peleador 2</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Categoría</th>
                            <th>Apostar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="<?=SERVIDOR;?>controller/funciones_cargarTablaBox.js"></script>