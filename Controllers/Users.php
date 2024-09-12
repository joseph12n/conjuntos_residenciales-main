<?php
require_once "models/User.php";
require_once "models/User.php";
require_once "vendor/autoload.php"; // Asegúrate de que Composer esté cargado

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use FPDF\FPDF;



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

public function rolSearch() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rolCode = $_POST['searchCode'];
        $user = new User();
        $rol = $user->getrol_bycode($rolCode);

        if ($rol) {
            // Enviar el rol encontrado a la vista
            $rol = [$rol];
        } else {
            // No se encontró el rol
            $rol = [];
            echo '<div class="alert alert-warning">No se encontró el rol con el código proporcionado.</div>';
        }

        // Incluir la vista con la lista de roles
        require_once 'views/roles_list.php'; // Ajusta esta ruta según tu estructura de archivos
    }
}

//exportaciones a excel 



public function exportExcel() {
    if ($this->session == 'ADMIN' || $this->session == 'VIGILANTE') {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Agregar encabezados
        $headers = ['ROL', 'CÓDIGO Usuario', 'CASA', 'NOMBRES', 'APELLIDOS', 'FECHA DE NACIMIENTO', 'IDENTIFICACIÓN', 'EMAIL', 'TELÉFONO', 'ESTADO'];
        $sheet->fromArray($headers, NULL, 'A1');

        // Agregar datos de usuarios
        $users = new User();
        $users = $users->read_users();
        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user->getRolName());
            $sheet->setCellValue('B' . $row, $user->getUserCode());
            $sheet->setCellValue('C' . $row, $user->getHouseName());
            $sheet->setCellValue('D' . $row, $user->getUserName());
            $sheet->setCellValue('E' . $row, $user->getUserLastName());
            $sheet->setCellValue('F' . $row, $user->getUserBirthday());
            $sheet->setCellValue('G' . $row, $user->getUserId());
            $sheet->setCellValue('H' . $row, $user->getUserEmail());
            $sheet->setCellValue('I' . $row, $user->getUserPhone());
            $sheet->setCellValue('J' . $row, $this->state[$user->getUserState()]);
            $row++;
        }

        // Crear el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'usuarios.xlsx';

        // Forzar descarga del archivo
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit;
    } else {
        header("Location: ?c=Dashboard");
    }
}

public function exportPdf() {
    if ($this->session == 'ADMIN' || $this->session == 'VIGILANTE') {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 12);

        // Agregar encabezados
        $pdf->Cell(40, 10, 'ROL');
        $pdf->Cell(40, 10, 'CÓDIGO Usuario');
        $pdf->Cell(40, 10, 'CASA');
        $pdf->Cell(40, 10, 'NOMBRES');
        $pdf->Cell(40, 10, 'APELLIDOS');
        $pdf->Cell(30, 10, 'FECHA DE NACIMIENTO');
        $pdf->Cell(30, 10, 'IDENTIFICACIÓN');
        $pdf->Cell(60, 10, 'EMAIL');
        $pdf->Cell(30, 10, 'TELÉFONO');
        $pdf->Cell(30, 10, 'ESTADO');
        $pdf->Ln();

        // Agregar datos de usuarios
        $users = new User();
        $users = $users->read_users();
        foreach ($users as $user) {
            $pdf->Cell(40, 10, $user->getRolName());
            $pdf->Cell(40, 10, $user->getUserCode());
            $pdf->Cell(40, 10, $user->getHouseName());
            $pdf->Cell(40, 10, $user->getUserName());
            $pdf->Cell(40, 10, $user->getUserLastName());
            $pdf->Cell(30, 10, $user->getUserBirthday());
            $pdf->Cell(30, 10, $user->getUserId());
            $pdf->Cell(60, 10, $user->getUserEmail());
            $pdf->Cell(30, 10, $user->getUserPhone());
            $pdf->Cell(30, 10, $this->state[$user->getUserState()]);
            $pdf->Ln();
        }

        // Crear el archivo PDF
        $filename = 'usuarios.pdf';
        $pdf->Output('D', $filename);
        exit;
    } else {
        header("Location: ?c=Dashboard");
    }
}

}
?>