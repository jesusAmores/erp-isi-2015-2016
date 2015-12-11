<?php
    function sqlite_open(){
        $handle = new SQLite3('usuario.db');
        return $handle;
    } 
    $bd= sqlite_open();
   $bd->query("delete from usuarios where Id= $_GET[id]");
?>

