<?php

class Conexion extends PDO
{
    public function __construct(){
        parent::__construct(
            'mysql:host='. DB_HOST .
            ';dbname='. DB_NAME,
            DB_USER,
            DB_PASS,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. DB_CHAR)
        );
    }
}

/*
class conexion extends PDO
{

    protected static $instancia = null;
    public static $_servidor = null;
    private $driver, $database, $host, $puerto;
    private $usuario = "root", $password;

    public function __construct()
    {
        if (!is_null(self::$instancia)) {
            return self::$instancia;
        }
        $dsn = $this->driver . ':dbname=' . $this->database . '; host=' . $this->host . '; port=' . $this->puerto;
        $password = trim($this->password);
        try {
            self::$instancia = parent::__construct($dsn, $this->usuario, $password);
            return self::$instancia;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
*/

