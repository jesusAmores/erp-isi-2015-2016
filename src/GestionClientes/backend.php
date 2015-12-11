<?php
        // put your code here
         include_once("bd.php");
    $bd = new BD();

    
    $resultado=$bd->lista_usuarios();
    while ($row = $resultado->fetchArray()) {
        $resp = array();
        $resp["Uno"] = $row[0];
        $resp["Dos"] = $row[1];
        $resp["Tres"]=$row[2];
        $resp["Cuatro"]=$row[3];
        $resp["Cinco"]=$row[4];
        $resp["Seis"]=$row[5];
    }
    print json_encode($resp);
?>
