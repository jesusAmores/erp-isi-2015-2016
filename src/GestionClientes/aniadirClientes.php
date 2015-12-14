<html>
    <head></head>
    <?php 
    
        function sqlite_open(){
            $handle = new SQLite3('usuario.db');
            return $handle;
        }
        function getId(){
            $id=1;
            $cons=sqlite_open()->query("select id from usuarios");
            while($row=$cons->fetchArray()){
                
                if($id<$row[0]){
                    $id=$row[0];
                }
            }
            return $id+1;
        }
        date_default_timezone_set('Europe/Paris');
        $fecha=getdate();
        $id=getId();
    ?>
    
    <body>
 
         <form action="" method="post">
            <table>
                 <tr>
                     <td>id:</td>
                     <td><input type="text" name="id" readonly="true" value="<?php echo $id;?>"/></td>
                 </tr>
                 <tr>
                     <td>nombre:</td>
                     <td><input type="text" name="nombre"/></td>
                 </tr>
                 <tr>
                     <td>apellidos</td>
                     <td><input type="text" name="apellidos"/></td>
                 </tr>
                 <tr>
                     <td>correo Electronico</td>
                     <td><input type="text" name="correoElectronico"/></td>
                 </tr>
                 <tr>
                     <td>Contrase&ntilde;a</td>
                     <td><input type="text" name="contrasena"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de nacimiento</td>
                     <td><input type="text" name="fechaNac"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de registro</td>
                     <td><input type="text" readonly="true" name="fechaReg" value="<?php echo $fecha['mday']."/".$fecha['mon']."/".$fecha['year'];?>"/></td>
                 </tr>
                 <tr>
                     <td>Valido</td>
                     <td><input type="text" name="valido"/></td>
                 </tr>
            </table>
            
            <input type="submit" name="enviar" value="A&ntilde;adir cliente">
            <td><a href="index.php?"><input type="button" value="finalizar"></a></td>
            <?php
                if($_POST['nombre']!=''){
                    $bd=sqlite_open();
                    $bd->query("INSERT INTO usuarios(nombre,apellidos,correoElectronico,contrasena,fechaNac,fechaReg,valido) VALUES('{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['correoElectronico']}','{$_POST['contrasena']}','{$_POST['fechaNac']}','{$_POST['fechaReg']}','{$_POST['valido']}')");
                }
            ?>
        </form>
    </body>
        
    
</html>