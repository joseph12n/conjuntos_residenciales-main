<?php
    class User{
        // 1ra Parte: Atributos
        private $dbh;
        private $cod_rol;
        private $rol_name;
        private $cod_house;
        private $house_name;
        private $cod_user;
        private $user_name;
        private $user_lastname;
        private $user_birthday;
        private $user_id;
        private $user_email;
        private $user_pass;
        private $user_phone;
        private $user_state;

        // 2da Parte: Sobrecarga Constructores
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # Constructor: Objeto 00 parámetros
        public function __construct0(){}

        # Constructor: Objeto 02 parámetros
        public function __construct2($user_email,$user_pass){
            $this->user_email = $user_email;
            $this->user_pass = $user_pass;
        }

        # Constructor: Objeto 12 parámetros
        public function __construct13($cod_rol,$rol_name,$cod_house,$house_name,$cod_user,$user_name,$user_lastname,$user_birthday,$user_id,$user_email,$user_pass,$user_phone,$user_state){
            $this->cod_rol = $cod_rol;
            $this->rol_name = $rol_name;
            $this->cod_house = $cod_house;
            $this->house_name = $house_name;
            $this->cod_user = $cod_user;
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->user_birthday = $user_birthday;
            $this->user_id = $user_id;
            $this->user_email = $user_email;
            $this->user_pass = $user_pass;
            $this->user_phone = $user_phone;;
            $this->user_state = $user_state;
        }
        # Constructor: Objeto 10 parámetros
        public function __construct11($cod_rol,$cod_user,$cod_house,$user_name,$user_lastname,$user_birthday,$user_id,$user_email,$user_pass,$user_phone,$user_state){
            $this->cod_rol = $cod_rol;
            $this->cod_user = $cod_user;
            $this->cod_house = $cod_house;
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->user_birthday = $user_birthday;
            $this->user_id = $user_id;
            $this->user_email = $user_email;
            $this->user_pass = $user_pass;
            $this->user_phone = $user_phone;;
            $this->user_state = $user_state;
        }
        # Constructor: Objeto 10 parámetros
        public function __construct11Login($cod_rol,$cod_user,$rol_name,$cod_house,$user_name,$user_lastname,$user_birthday,$user_id,$user_email,$user_pass,$user_phone,$user_state){
            $this->cod_rol = $cod_rol;
            $this->rol_name = $rol_name;
            $this->cod_user = $cod_user;
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->user_birthday = $user_birthday;
            $this->user_id = $user_id;
            $this->user_email = $user_email;
            $this->user_pass = $user_pass;
            $this->user_phone = $user_phone;;
            $this->user_state = $user_state;
        }
        # Código Rol
        public function setRolCode($cod_rol){
            $this->cod_rol = $cod_rol;
        }
        public function getRolCode(){
            return $this->cod_rol;
        }
        # Nombre Rol
        public function setRolName($rol_name){
            $this->rol_name = $rol_name;
        }
        public function getRolName(){
            return $this->rol_name;
        }
        # Código Casa
        public function setHouseCode($cod_house){
            $this->cod_house = $cod_house;
        }
        public function getHouseCode(){
            return $this->cod_house;
        }
        # Nombre Casa
        public function setHouseName($house_name){
            $this->house_name = $house_name;
        }
        public function getHouseName(){
            return $this->house_name;
        }
        # Código Usuario
        public function setUserCode($cod_user){
            $this->cod_user = $cod_user;
        }
        public function getUserCode(){
            return $this->cod_user;
        }
        # Nombre Usuario
        public function setUserName($user_name){
            $this->user_name = $user_name;
        }
        public function getUserName(){
            return $this->user_name;
        }
        # Apellido Usuario
        public function setUserLastName($user_lastname){
            $this->user_lastname = $user_lastname;
        }
        public function getUserLastName(){
            return $this->user_lastname;
        }
        # cumpleaños Usuario
        public function setUserBirthday($user_birthday){
            $this->user_birthday = $user_birthday;
        }
        public function getUserBirthday(){
            return $this->user_birthday;
        }
        # Identificación Usuario
        public function setUserId($user_id){
            $this->user_id = $user_id;
        }
        public function getUserId(){
            return $this->user_id;
        }
        # Email Usuario
        public function setUserEmail($user_email){
            $this->user_email = $user_email;
        }
        public function getUserEmail(){
            return $this->user_email;
        }
        # Contraseña Usuario
        public function setUserPass($user_pass){
            $this->user_pass = $user_pass;
        }
        public function getUserPass(){
            return $this->user_pass;
        }
        # telefono Usuario
        public function setUserPhone($user_phone){
            $this->user_phone = $user_phone;
        }
        public function getUserPhone(){
            return $this->user_phone;
        }
        # Estado Usuario
        public function setUserState($user_state){
            $this->user_state = $user_state;
        }
        public function getUserState(){
            return $this->user_state;
        }

        // 4ta Parte: Persistencia a la Base de Datos

        # RF01_CU01 - Iniciar Sesión
        public function login(){
            try {
                $sql = 'SELECT
                            r.cod_rol,
                            r.rol_name,
                            u.cod_user,
                            u.user_name,
                            u.user_lastname,
                            u.user_birthday,
                            u.user_id,
                            u.user_email,
                            u.user_pass,
                            u.user_phone,
                            u.user_state
                        FROM ROLES AS r
                        INNER JOIN USERS AS u ON r.cod_rol = u.cod_rol
                        WHERE user_email = :userEmail AND user_pass = :userPass';
                
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('userEmail', $this->getUserEmail());
                $stmt->bindValue('userPass', sha1($this->getUserPass()));
                $stmt->execute();
                $userDb = $stmt->fetch();
                
                if ($userDb) {
                    $user = new User(
                        $userDb['cod_rol'],
                        $userDb['rol_name'],
                        $userDb['cod_user'],
                        $userDb['user_name'],
                        $userDb['user_lastname'],
                        $userDb['user_birthday'],
                        $userDb['user_id'],
                        $userDb['user_email'],
                        $userDb['user_pass'],
                        $userDb['user_phone'],
                        $userDb['user_state']
                    );
                    return $user;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # RF03_CU03 - Registrar Rol
        public function create_rol(){
            try {
                $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF04_CU04 - Consultar Roles
        public function read_roles(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM ROLES';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolObj = new User;
                    $rolObj->setRolCode($rol['cod_rol']);
                    $rolObj->setRolName($rol['rol_name']);
                    array_push($rolList, $rolObj);
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF05_CU05 - Obtener el Rol por el código
        public function getrol_bycode($rolCode){
            try {
                $sql = "SELECT * FROM ROLES WHERE cod_rol=:rolCode";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
                $rolDb = $stmt->fetch();
                $rol = new User;
                $rol->setRolCode($rolDb['cod_rol']);
                $rol->setRolName($rolDb['rol_name']);
                return $rol;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF06_CU06 - Actualizar Rol
        public function update_rol(){
            try {
                $sql = 'UPDATE ROLES SET
                            cod_rol = :rolCode,
                            rol_name = :rolName
                        WHERE cod_rol = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF07_CU07 - Eliminar Rol
        public function delete_rol($rolCode){
            try {
                $sql = 'DELETE FROM ROLES WHERE cod_rol = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # RF03_CU03 - Registrar casa
        public function create_house(){
            try {
                $sql = 'INSERT INTO HOUSE VALUES (:houseCode,:houseName)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('houseCode', $this->getHouseCode());
                $stmt->bindValue('houseName', $this->getHouseName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF04_CU04 - Consultar casas
        public function read_house(){
            try {
                $houseList = [];
                $sql = 'SELECT * FROM HOUSE';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $house) {
                    $houseObj = new User;
                    $houseObj->setHouseCode($house['cod_house']);
                    $houseObj->setHouseName($house['house_name']);
                    array_push($houseList, $houseObj);
                }
                return $houseList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF05_CU05 - Obtener la casa por el código
        public function gethouse_bycode($houseCode){
            try {
                $sql = "SELECT * FROM HOUSE WHERE cod_house=:houseCode";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('houseCode', $houseCode);
                $stmt->execute();
                $houseDb = $stmt->fetch();
                $house = new User;
                $house->setHouseCode($houseDb['cod_house']);
                $house->setHouseName($houseDb['house_name']);
                return $house;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF06_CU06 - Actualizar casa
        public function update_house(){
            try {
                $sql = 'UPDATE HOUSE SET
                            cod_house = :houseCode,
                            house_name = :houseName
                        WHERE cod_house = :houseCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('houseCode', $this->getHouseCode());
                $stmt->bindValue('houseName', $this->getHouseName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF07_CU07 - Eliminar casa
        public function delete_house($houseCode){
            try {
                $sql = 'DELETE FROM HOUSE WHERE cod_house = :houseCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('houseCode', $houseCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF08_CU08 - Registrar Usuario
        public function create_user(){
            try {
                $sql = 'INSERT INTO USERS VALUES (
                            :rolCode,
                            :userCode,
                            :houseCode,
                            :userName,
                            :userLastName,
                            :userBirthday,
                            :userId,
                            :userEmail,
                            :userPass,
                            :userPhone,
                            :userState
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('userCode', $this->getUserCode());
                $stmt->bindValue('houseCode', $this->getHouseCode());
                $stmt->bindValue('userName', $this->getUserName());
                $stmt->bindValue('userLastName', $this->getUserLastName());
                $stmt->bindValue('userBirthday', $this->getUserBirthday());
                $stmt->bindValue('userId', $this->getUserId());
                $stmt->bindValue('userEmail', $this->getUserEmail());
                $stmt->bindValue('userPass', sha1($this->getUserPass()));
                $stmt->bindValue('userPhone', $this->getUserPhone());
                $stmt->bindValue('userState', $this->getUserState());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # RF09_CU09 - Consultar Usuarios
        public function read_users() {
            try {
                $userList = [];
                $sql = "SELECT 
                            r.cod_rol, 
                            r.rol_name, 
                            u.cod_user, 
                            u.user_name, 
                            u.user_lastname, 
                            u.user_birthday, 
                            u.user_id, 
                            u.user_email, 
                            u.user_pass, 
                            u.user_phone, 
                            u.user_state,
                            a.house_name,
                            a.cod_house
                        FROM ROLES AS r
                        INNER JOIN USERS AS u ON r.cod_rol = u.cod_rol 
                        INNER JOIN HOUSE AS a ON a.cod_house = u.cod_house";
        
                $stmt = $this->dbh->query($sql);
                if ($stmt === false) {
                    throw new Exception("Error en la ejecución de la consulta SQL");
                }
        
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user) {
                    $userObj = new User(
                        $user['cod_rol'],
                        $user['rol_name'],
                        $user['cod_house'],
                        $user['house_name'],  
                        $user['cod_user'],
                        $user['user_name'],
                        $user['user_lastname'],
                        $user['user_birthday'],
                        $user['user_id'],
                        $user['user_email'],
                        $user['user_pass'],
                        $user['user_phone'],
                        $user['user_state']
                    );
                    $userList[] = $userObj;  
                }
        
                return $userList;
            } catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }

        public function getuser_bycode($userCode) {
            try {
                $sql = 'SELECT
                    r.cod_rol,
                    r.rol_name,
                    u.cod_user,
                    u.user_name,
                    u.user_lastname,
                    u.user_birthday,
                    u.user_id,
                    u.user_email,
                    u.user_pass,
                    u.user_phone,
                    u.user_state,
                    h.cod_house,
                    h.house_name
                FROM ROLES AS r
                INNER JOIN USERS AS u ON r.cod_rol = u.cod_rol 
                INNER JOIN HOUSE AS h ON h.cod_house = u.cod_house
                WHERE u.cod_user = :userCode';
        
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('userCode', $userCode);
                $stmt->execute();
                $userDb = $stmt->fetch();
        
                if ($userDb) {
                    $user = new User(
                        $userDb['cod_rol'],
                        $userDb['rol_name'],
                        $userDb['cod_house'],
                        $userDb['house_name'],
                        $userDb['cod_user'],
                        $userDb['user_name'],
                        $userDb['user_lastname'],
                        $userDb['user_birthday'],
                        $userDb['user_id'],
                        $userDb['user_email'],
                        $userDb['user_pass'],
                        $userDb['user_phone'],
                        $userDb['user_state']
                    );
                    return $user;
                } else {
                    return null; // O manejar el caso cuando no se encuentra el usuario
                }
            } catch (Exception $e) {
                error_log("Error en getuser_bycode: " . $e->getMessage());
                throw new Exception("Error al obtener el usuario");
            }
        }
        
         # RF11_CU11 - Actualizar usuario
         public function update_user(){
            try {
                $sql = "UPDATE USERS SET
                            cod_rol = :rolCode,
                            cod_house = :houseCode,
                            user_name = :userName,
                            user_lastname = :userLastName,
                            user_birthday = :userBirthday,
                            user_id = :userId,
                            user_email = :userEmail,
                            user_pass = :userPass,
                            user_phone = :userPhone,
                            user_state = :userState
                        WHERE cod_user = :userCode";
               
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('houseCode', $this->getHouseCode());
                $stmt->bindValue('userName', $this->getUserName());
                $stmt->bindValue('userLastName', $this->getUserLastName());
                $stmt->bindValue('userBirthday', $this->getUserBirthday());
                $stmt->bindValue('userId', $this->getUserId());
                $stmt->bindValue('userEmail', $this->getUserEmail());
                // $stmt->bindValue('userPass', password_hash($this->getUserPass(), PASSWORD_DEFAULT));
                $stmt->bindValue('userPass', sha1($this->getUserPass()));
                $stmt->bindValue('userPhone', $this->getUserPhone());
                $stmt->bindValue('userState', $this->getUserState());
                $stmt->bindValue('userCode', $this->getUserCode());                
                $stmt->execute();
            } catch (Exception $e) {
                // die($e->getMessage());
                error_log("Error en update_user: " . $e->getMessage());
            } 
        }

        # RF12_CU12 - Eliminar Usuario
        public function delete_user($userCode){
            try {
                $sql = 'DELETE FROM USERS WHERE cod_user = :userCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('userCode', $userCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

    }

?>