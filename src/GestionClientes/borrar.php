<?php
    $handle = new SQLite3('cliente.db') or die("cannot open the database");
    
    $handle->exec("DELETE FROM usuarios WHERE id=".$_GET['id']);
    header("Location:index.php");

?>