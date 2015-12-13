<?php


$handle = new SQLite3('usuario.db') or die("cannot open the database");
    
    $handle->exec("UPDATE usuarios SET nombre='nachitoss' WHERE id=".$_GET['id']);
$handle->exec("DESCRIBE usuarios ");
    
    //$handle->exec("INSERT INTO usuarios(id,nombre,apellidos,correoElectronico,contrasena,fechaNac,fechaReg,valido) VALUES(2,'Julian','munioz,ndnd@hotm','1234','23/12/1234','23/12/1234',true");
    
    header("Location:index.php");

?>