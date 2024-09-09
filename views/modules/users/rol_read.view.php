<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ROLES
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="?c=Users&a=rolCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ROL</a>
        </li>
        <li>
            <a class="active" href="?c=Users&a=rolRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR ROLES</a>
        </li>
    </ul>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>Código Rol</th>
                            <th>Nombre Rol</th>
                            <th>Actualizar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($roles as $rol) : ?>
                            <tr>
                                <td><?php echo $rol->getRolCode(); ?></td>
                                <td><?php echo $rol->getRolName(); ?></td>
                                <td>
                                    <!-- Botón de Actualizar con SweetAlert -->
                                    <button class="btn btn-primary btn-xs" 
                                            onclick="confirmUpdate('<?php echo $rol->getRolCode(); ?>')">
                                        <i class="fa fa-pencil"></i>
                                    </button>

                                    <!-- Botón de Eliminar con SweetAlert -->
                                    <button class="btn btn-danger btn-xs" 
                                            onclick="confirmDelete('<?php echo $rol->getRolCode(); ?>')">
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
    function confirmUpdate(rolCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Vas a actualizar este rol!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Users&a=rolUpdate&idRol=" + rolCode;
            }
        });
    }

    // Función para la alerta de eliminación
    function confirmDelete(rolCode) {
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
                window.location.href = "?c=Users&a=rolDelete&idRol=" + rolCode;
            }
        });
    }
</script>
