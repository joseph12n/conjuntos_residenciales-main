<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LUGARES
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="?c=Places&a=placeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar lugar</a>
        </li>
        <li>
            <a class="active" href="?c=Places&a=placeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Consultar lugar</a>
        </li>
    </ul>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>Código lugar</th>
                            <th>Nombre lugar</th>
                            <th>Actualizar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($places as $place) : ?>
                            <tr>
                                <td><?php echo $place->getPlaceCode(); ?></td>
                                <td><?php echo $place->getPlaceName(); ?></td>
                                <td>
                                    <!-- Botón de Actualizar con SweetAlert -->
                                    <button class="btn btn-primary btn-xs" 
                                            onclick="confirmUpdate('<?php echo $place->getPlaceCode(); ?>')">
                                        <i class="fa fa-pencil"></i>
                                    </button>

                                    <!-- Botón de Eliminar con SweetAlert -->
                                    <button class="btn btn-danger btn-xs" 
                                            onclick="confirmDelete('<?php echo $place->getPlaceCode(); ?>')">
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
    function confirmUpdate(placeCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Vas a actualizar este lugar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Places&a=placeUpdate&idplace=" + placeCode;
            }
        });
    }

    // Función para la alerta de eliminación
    function confirmDelete(placeCode) {
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
                window.location.href = "?c=Places&a=placeDelete&idplace=" + placeCode;
            }
        });
    }
</script>
