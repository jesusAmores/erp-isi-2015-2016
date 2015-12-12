<html>
    <head></head>
    <?php 
    
        function sqlite_open(){
            $handle = new SQLite3('usuario.db');
            return $handle;
        } 
        
        $bd=sqlite_open();
        if($_GET['id']!=NULL){
            $cons = $bd->query("SELECT * from usuarios where id=$_GET[id]");
            while($row=$cons->fetchArray()){
    ?>
    
    <body>
 
         <form action="" method="post">
            <table>
                 <tr>
                     <td>id:</td>
                     <td><input type="text" readonly="true" value="<?php echo $row[0];?>"/></td>
                 </tr>
                 <tr>
                     <td>nombre:</td>
                     <td><input type="text" value="<?php echo $row[1];?>"/></td>
                 </tr>
                 <tr>
                     <td>apellidos</td>
                     <td><input type="text" value="<?php echo $row[2];?>"/></td>
                 </tr>
                 <tr>
                     <td>correo Electronico</td>
                     <td><input type="text" value="<?php echo $row[3];?>"/></td>
                 </tr>
                 <tr>
                     <td>Contrase&ntilde;a</td>
                     <td><input type="text" value="<?php echo $row[4];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de nacimiento</td>
                     <td><input type="text" value="<?php echo $row[5];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de registro</td>
                     <td><input type="text" value="<?php echo $row[6];?>"/></td>
                 </tr>
                 <tr>
                     <td>Valido</td>
                     <td><input type="text" value="<?php echo $row[7];?>"/></td>
                 </tr>
            </table>
        </form>
    </body>
        <?php } }else{?>
<body>
         <form action="" method="post">
            <table>
                 <tr>
                     <td>id:</td>
                     <td><input type="text" readonly="true" value="<?php echo $row[0];?>"/></td>
                 </tr>
                 <tr>
                     <td>nombre:</td>
                     <td><input type="text" value="<?php echo $row[1];?>"/></td>
                 </tr>
                 <tr>
                     <td>apellidos</td>
                     <td><input type="text" value="<?php echo $row[2];?>"/></td>
                 </tr>
                 <tr>
                     <td>correo Electronico</td>
                     <td><input type="text" value="<?php echo $row[3];?>"/></td>
                 </tr>
                 <tr>
                     <td>Contrase&ntilde;a</td>
                     <td><input type="text" value="<?php echo $row[4];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de nacimiento</td>
                     <td><input type="text" value="<?php echo $row[5];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de registro</td>
                     <td><input type="text" value="<?php echo $row[6];?>"/></td>
                 </tr>
                 <tr>
                     <td>Valido</td>
                     <td><input type="text" value="<?php echo $row[7];?>"/></td>
                 </tr>
            </table>
        </form>
    </body>
            
       <?php } ?>
    
</html>