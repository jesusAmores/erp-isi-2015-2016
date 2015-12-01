<?php
/**
 * Ejemplo sencillo para extender la clase SQLite3 y cambiar los parámetros
 * de __construct, después usar el método open para inicializar la BD.
 * 
 * https://secure.php.net/manual/es/sqlite3.open.php
 * 
 */
class BD extends SQLite3
{
    function __construct() {
        $this->open('practica2.db');
    }
    
    function lista_usuarios($campo,$nombre) {
        if($campo)
            if($nombre)
                return $this->query('SELECT * FROM USUARIOS WHERE name like %$nombre% ORDER BY $campo');
        return $this->query('SELECT * FROM USUARIOS');
    }
    function nuevoUsuario(){
        
    }
}

?>