$(document).ready(function () {
    function mostrarTabla() {
        $('#tablaSoccerProximos').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            ajax: './model/mostrarTablaSoccer.php',
            columns: [
                { data: "equipo1" },
                { data: "equipo2" },
                { data: "fecha" },
                { data: "hora" },
                { data: "liga" },
                {
                    data: "apostar",
                    render: function (data, type, row) {
                        return '<span class="btn btn-success btn-sm" data-toggle="modal" data-target="#editarMateriaModal"><i class="fas fa-edit"></i></span>'
                    }
                }
            ]
        });

        $.ajax({
            url: "./model/mostrarTablaSoccer.php",
            success: (r)=>{
                console.log(r);
            }
        });

        return false;

    };

    mostrarTabla();
});