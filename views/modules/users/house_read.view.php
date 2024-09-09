<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CASAS
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="?c=Users&a=houseCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CASA</a>
        </li>
        <li>
            <a class="active" href="?c=Users&a=houseRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR CASAS</a>
        </li>
    </ul>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>Código Casa</th>
                            <th>Nombre Casa</th>
                            <th>Actualizar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($houses as $house) : ?>
                            <tr>
                                <td><?php echo $house->getHouseCode(); ?></td>
                                <td><?php echo $house->getHouseName(); ?></td>
                                <td>
                                    <!-- Botón de Actualizar con SweetAlert -->
                                    <button class="btn btn-primary btn-xs" 
                                            onclick="confirmUpdate('<?php echo $house->getHouseCode(); ?>')">
                                        <i class="fa fa-pencil"></i>
                                    </button>

                                    <!-- Botón de Eliminar con SweetAlert -->
                                    <button class="btn btn-danger btn-xs" 
                                            onclick="confirmDelete('<?php echo $house->getHouseCode(); ?>')">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
</div>

<script>
    // Función para la alerta de actualización
    function confirmUpdate(houseCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Vas a actualizar esta casa!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Users&a=houseUpdate&idhouse=" + houseCode;
            }
        });
    }

    // Función para la alerta de eliminación
    function confirmDelete(houseCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Users&a=houseDelete&idhouse=" + houseCode;
            }
        });
    }
</script>
