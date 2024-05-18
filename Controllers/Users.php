<?php
    require_once "models/User.php";
    class Users{
        // Controlador Principal
        public function main(){       

            // Objeto02 Usuario
            $user = new User;
            $user->setUserCode("user_123");
            echo "Código Usuario: ", $user->getUserCode(), "<hr>";
            $user->setUserName("Pepito");
            echo "Nombre Usuario: ", $user->getUserName(), "<hr>";
            $user->setUserLastName("Perez");
            echo "Apellido Usuario: ", $user->getUserLastName(), "<hr>";
            $user->setUserId(123456789);
            echo "Identificación Usuario: ", $user->getUserId(), "<hr>";
            $user->setUserEmail("pepito@perez.com");
            echo "Correo Usuario: ", $user->getUserEmail(), "<hr>";
            $user->setUserPass(12345);
            echo "Contraseña Usuario: ", $user->getUserPass(), "<hr>";
            $user->setUserState(True);
            echo "Estado Usuario: ", $user->getUserState(), "<hr>";
            echo "<hr>";

            // Objeto03 Constructor 09 Parámetros
            $userconst = new User(
                "02",
                "customer",
                "user_567",
                "Marinita",
                "García",
                "987654321",
                "marinita@garcia.com",
                sha1("12345"),
                True
            );
            print_r($userconst);
            echo "<hr>";

            // Objeto04 Constructor 02 Parámetros
            $user_login = new User("rodrigo@lara.com",md5("12345"));
            print_r($user_login);
            echo "<hr>";
        }

        // Controlador Crear Rol
        public function rolCreate(){        
            $rol = new User;        
            $rol->setRolName("seller");
            $rol->createRol();
        }

        // Controlador Consultar Roles
        public function rolRead(){
            $roles = new User;
            $roles = $roles->readRol();
            print_r($roles);
        }

        // Controlador Actualizar Rol
        public function rolUpdate(){
            $rolCode = 1;
            // Objeto_01. Crear el objeto a partir del registro db, según petición
            $rolId = new User;
            $rolId = $rolId->getRolByCode($rolCode);
            print_r($rolIId);
            
            // Objeto_02. Actualizar el usuario en la db, a partir del Objeto_01
            $rolUpdate = new User;
            $rolUpdate->setRolCode($rolCode);
            $rolUpdate->setRolName("administrador");
            $rolUpdate->updateRol();
        }
        
        // Controlador Eliminar Rol
        public function rolDelete(){
            $rolCode = 3;
            $rol = new User;
            $rol->deleteRol($rolCode);
        }

      // Controlador Crear usuario
<<<<<<< HEAD
        public function userCreate(){        
=======

         public function userCreate(){        
>>>>>>> 0551ff09999916575763faa18fec3a08bca14527
        $user = new User( 
                3,       
                 null,
                "carlos",
                "fernandez",
                "123",
                "carlos@fernandez.com",
                "12345",
                1
                );
                $user->create_user();
            }
        // Controlador Consultar usuarios
        public function userRead(){
            $users = new User;
            $users = $users->read_users();
            print_r($users);
        }
        // Controlador Actualizar Rol
        public function userUpdate(){
            $userCode = 1;
            // Objeto_01. Crear el objeto a partir del registro db, según petición
            $user = new User;
            $user = $user->getuser_bycode($userCode);
            print_r($user);
            
            // Objeto_02. Actualizar el usuario en la db, a partir del Objeto_01
            $userUpdate = new User(
                3,       
                $userCode,
                "emily",
                "parra",
                "54321",
                "emily@parra.com",
                "54321",
                0
            );
            $userUpdate->update_user();
        }
        // Controlador Eliminar usuario
        public function userDelete(){
            $userCode = 3;
            $user = new User;
            $user->delete_user($userCode);
        }
    }
?>