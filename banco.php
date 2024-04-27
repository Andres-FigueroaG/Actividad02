<?php

class Banco
{
    private static $dbNome = 'CRUD';
    private static $dbHost = 'mysql';
    private static $dbUsuario = 'root';
    private static $dbcontraseña = 'root';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('La funcion de inicio no está permitida');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbcontraseña); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
