<?php 

class Database{

    public static function StartUp()
    {
        // DB CREDENCIALES DE USUARIO.
        define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_PASS','');
        define('DB_NAME','RevistaDB');
        // Ahora, establecemos la conexión.

        // Ejecutamos las variables y aplicamos UTF8
        $connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        return $connect;

    }
        
}
