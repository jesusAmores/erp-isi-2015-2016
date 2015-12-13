<html>
    <?php 
    
        function sqlite_open(){
            $handle = new SQLite3('usuario.db');
            return $handle;
        } 
        
        $bd=sqlite_open();
            $cons = $bd->query("SELECT * from usuarios where id=$_GET[id]");
            while($row=$cons->fetchArray()){
    ?>
    <head> EDITAR CLIENTE</head>
    <body>
 
         <form action="" method="post">
            <table>
                 <tr>
                     <td>id:</td>
                     <td><input type="text" name="id" readonly="true" value="<?php echo $row[0];?>"/></td>
                 </tr>
                 <tr>
                     <td>nombre:</td>
                     <td><input type="text" name="nombre" value="<?php echo $row[1];?>"/></td>
                 </tr>
                 <tr>
                     <td>apellidos</td>
                     <td><input type="text" name="apellidos" value="<?php echo $row[2];?>"/></td>
                 </tr>
                 <tr>
                     <td>correo Electronico</td>
                     <td><input type="text" name="correoElectronico" value="<?php echo $row[3];?>"/></td>
                 </tr>
                 <tr>
                     <td>Contrase&ntilde;a</td>
                     <td><input type="text" name="contrasena" value="<?php echo $row[4];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de nacimiento</td>
                     <td><input type="text" name='fechaNac' value="<?php echo $row[5];?>"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de registro</td>
                     <td><input type="text" name="fechaReg" value="<?php echo $row[6];?>"/></td>
                 </tr>
                 <tr>
                     <td>Valido</td>
                     <td><input type="text" name="valido" value="<?php echo $row[7];}?>"/></td>
                 </tr>
                 <tr>
                    <td>
                        <input type="submit" name="enviar" value="Actualizar cliente">
                     <a href="index.php?"><input type="button" value="finalizar"></a>
                    </td>
                   
                 </tr>
            </table>
             <?php
              
                    $bd=sqlite_open();
                    $bd->query("UPDATE usuarios "
                            . "SET nombre='{$_POST['nombre']}',"
                            . "apellidos='{$_POST['apellidos']}', "
                            . "correoElectronico='{$_POST['correoElectronico']}', "
                            . "contrasena='{$_POST['contrasena']}',"
                            . "fechaNac='{$_POST['fechaNac']}',"
                            . "fechaReg='{$_POST['fechaReg']}',"
                            . "valido='{$_POST['valido']}'"
                            . "WHERE id=".$_GET[id]);
                    
                
            ?>
        </form>
    </body>
   
    
</html>