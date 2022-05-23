<?php
namespace Model;
class ActiveRecord {

    // Base de Datos 
    protected static $db;
    protected static $tabla;
    protected static $columnasDB = [];

    // Alerta y Mensajes 
    protected static $alertas = [];

    // Definir la conexion a la base de datos
    public static function setDB($database) {
        self::$db = $database;
    }

    public static function setAlerta($tipo, $mensaje){
        static::$alertas[$tipo][] = $mensaje;
    }

    // Validacion
    public static function getAlert(){
        return static::$alertas;
    }

    public function validar(){
        static::$alertas = [];
        return static::$alertas;
    }

    // Consultar SQL para crear un objeto en Memoria
    public static function consultarSQL($query){
        // Consultar la base de datos
        $resultado = self::$db->query($query);
        
    }
}

?>