<?php
    $handle = new SQLite3('usuario.db') or die("cannot open the database");
    
    $handle->exec("DELETE FROM usuarios WHERE id=".$_GET['id']);
    header("Location:index.php");

?>