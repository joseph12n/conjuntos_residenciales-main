<?php
    require_once "models/User.php";
    class Users{
        private $session;
        public function __construct(){
            $this->session = $_SESSION['session'];
        }
    // Controlador Principal
    public function main()
    {
        header("Location: ?c=Dashboard");
    }

    // Controlador Crear Rol
    public function rolCreate()
    {
    if ($this->session == 'ADMIN') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/modules/users/rol_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rol = new User;
            $rol->setRolName($_POST['rol_name']);
            $rol->create_rol();
            header("Location: ?c=Users&a=rolRead");
        }
    } else {
        header("Location: ?c=Dashboard");
    }
    }
    // Controlador Consultar Roles
    public function rolRead() {
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        $roles = new User;
        $roles = $roles->read_roles();
        require_once "views/modules/users/rol_read.view.php";
    } else {
        header("Location: ?c=Dashboard");
    }
}
    // Controlador Actualizar Rol
    public function rolUpdate(){
        if ($this->session == 'ADMIN') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $rolId = new User;
            $rolId = $rolId->getrol_bycode($_GET['idRol']);
            require_once "views/modules/users/rol_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rolUpdate = new User;
            $rolUpdate->setRolCode($_POST['cod_rol']);
            $rolUpdate->setRolName($_POST['rol_name']);
            $rolUpdate->update_rol();
            header("Location: ?c=Users&a=rolRead");
        }
    } else {
        header("Location: ?c=Dashboard");
    }
    }
    // Controlador Eliminar Rol
    public function rolDelete(){
        if ($this->session == 'ADMIN') {
        $rol = new User;
        $rol->delete_rol($_GET['idRol']);
        header("Location: ?c=Users&a=rolRead");
    } else {
        header("Location: ?c=Dashboard");
    }
}
    // Controlador Crear CASA
    public function houseCreate(){
        if ($this->session == 'ADMIN') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/modules/users/house_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $house = new User;
            $house->setHouseName($_POST['house_name']);
            $house->create_house();
            header("Location: ?c=Users&a=houseRead");
        }
    } else {
        header("Location: ?c=Dashboard");
    }
}

    // Controlador Consultar CASAS
    public function houseRead(){
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        $houses = new User;
        $houses = $houses->read_house();
        require_once "views/modules/users/house_read.view.php";
    }  else {
        header("Location: ?c=Dashboard");
    }
}
    // Controlador Actualizar casa
    public function houseUpdate(){
        if ($this->session == 'ADMIN') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $houseId = new User;
            $houseId = $houseId->gethouse_bycode($_GET['idhouse']);
            require_once "views/modules/users/house_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $houseUpdate = new User;
            $houseUpdate->setHouseCode($_POST['cod_house']);
            $houseUpdate->setHouseName($_POST['house_name']);
            $houseUpdate->update_house();
            header("Location: ?c=Users&a=houseRead");
        }
    } else {
        header("Location: ?c=Dashboard");
    }
}
    // Controlador Eliminar casa
    public function houseDelete(){
        if ($this->session == 'ADMIN') {
        $house = new User;
        $house->delete_house($_GET['idhouse']);
        header("Location: ?c=Users&a=houseRead");
    } else {
        header("Location: ?c=Dashboard");
    }
}
    // Controlador Crear Usuario
    public function userCreate(){
        if ($this->session == 'ADMIN') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $roles = new User;
            $roles = $roles->read_roles();
            $houses = new User;
            $houses = $houses->read_house();
            require_once "views/modules/users/user_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User(
                $_POST['cod_rol'],
                null,
                $_POST['cod_house'],
                $_POST['user_name'],
                $_POST['user_lastname'],
                $_POST['user_birthday'],
                $_POST['user_id'],
                $_POST['user_email'],
                $_POST['user_pass'],
                $_POST['user_phone'],
                $_POST['user_state']
            );

            $user->create_user();
            header("Location: ?c=Users&a=userRead");
        }
    }else {
        header("Location: ?c=Dashboard");
    }
    }
    // Controlador Consultar Usuarios
    public function userRead(){
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        $state = ['Inactivo', 'Activo'];
        $users = new User;
        $users = $users->read_users();
        require_once "views/modules/users/user_read.view.php";
    } else {
        header("Location: ?c=Dashboard");
    }
    }
    // Controlador Actualizar Usuario
    public function userUpdate(){
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $state = ['Inactivo', 'Activo'];
            $roles = new User;
            $roles = $roles->read_roles();
            $user = new User;
            $user = $user->getuser_bycode($_GET['idUser']);
            $houses = new User;
            $houses = $houses->read_house();
            require_once "views/modules/users/user_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userUpdate = new User(
                $_POST['cod_rol'],
                $_POST['user_code'],
                $_POST['house_code'],
                $_POST['user_name'],
                $_POST['user_lastname'],
                $_POST['user_birthday'],
                $_POST['user_id'],
                $_POST['user_email'],
                $_POST['user_pass'],
                $_POST['user_phone'],
                $_POST['user_state']
            );
            // print_r($userUpdate);
            $userUpdate->update_user();
            header("Location: ?c=Users&a=userRead");
        }
    } else {
        header("Location: ?c=Dashboard");
    }
    }
    // Controlador Eliminar Usuario
    public function userDelete(){
        if ($this->session == 'ADMIN') {
        $user = new User;
        $user->delete_user($_GET['idUser']);
        header("Location: ?c=Users&a=userRead");
    } else {
        header("Location: ?c=Dashboard");
    }
} 
}
?>