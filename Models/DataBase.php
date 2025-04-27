<?php
class DataBase
{

//     public static function connection()
//     {
//         $hostname = "conjuntosreservas.mysql.database.azure.com";
//         $port = "3306";
//         $database = "conjuntos_reservas";
//         $username = "joseph12";
//         $password = "conjuntosR12";
//         $options = array(
//             PDO::MYSQL_ATTR_SSL_CA => 'Assets/DigiCertGlobalRootCA.crt.pem'
//         );
//         $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password, $options);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $pdo;
//     }
// }

    public static function connection()
    {
        $hostname = "localhost";
        $port = "3306";
        $database = "conjuntos_reservas";
        $username = "root";
        $password = "";
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}