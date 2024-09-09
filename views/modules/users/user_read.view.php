<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="?c=Users&a=userCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
        </li>
        <li>
            <a class="active" href="?c=Users&a=userRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR USUARIOS</a>
        </li>
    </ul>

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>ROL</th>
                            <th>CÓDIGO Usuario</th>
                            <th>CASA (si es residente)</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>IDENTIFICACIÓN</th>
                            <th>EMAIL</th>
                            <th>TELÉFONO</th>
                            <th>ESTADO</th>
                            <th>ACTUALIZAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user->getRolName(); ?></td>
                                <td><?php echo $user->getUserCode(); ?></td>
                                <td><?php echo $user->getHouseName(); ?></td>
                                <td><?php echo $user->getUserName(); ?></td>
                                <td><?php echo $user->getUserLastName(); ?></td>
                                <td><?php echo $user->getUserBirthday(); ?></td>
                                <td><?php echo $user->getUserId(); ?></td>
                                <td><?php echo $user->getUserEmail(); ?></td>
                                <td><?php echo $user->getUserPhone(); ?></td>
                                <td><?php echo $state[$user->getUserState()]; ?></td>
                                <td>
                                    <!-- Botón de Actualizar con SweetAlert -->
                                    <button class="btn btn-primary btn-xs" 
                                            onclick="confirmUpdate('<?php echo $user->getUserCode(); ?>')">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </td>
                                <td>
                                    <!-- Botón de Eliminar con SweetAlert -->
                                    <button class="btn btn-danger btn-xs" 
                                            onclick="confirmDelete('<?php echo $user->getUserCode(); ?>')">
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
    function confirmUpdate(userCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Vas a actualizar este usuario!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Users&a=userUpdate&idUser=" + userCode;
            }
        });
    }

    // Función para la alerta de eliminación
    function confirmDelete(userCode) {
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
                window.location.href = "?c=Users&a=userDelete&idUser=" + userCode;
            }
        });
    }
</script>
