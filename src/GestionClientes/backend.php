<?php
        // put your code here
         include_once("bd.php");
    $bd = new BD();

    
$resultado=$bd->lista_usuarios();
    while ($row = $resultado->fetchArray()) {
/* 
 * Fichero de ejemplo para responder una peticion AJAX con JSON.
 */  

$resp = array();
$resp["Uno"] = "Usted dijo: ".strtoupper($_POST['dato'])." ".date(DATE_RFC2822);
$resp["Dos"] = "---";
$resp["Tres"]=$row[1];
 }
print json_encode($resp);
?>
