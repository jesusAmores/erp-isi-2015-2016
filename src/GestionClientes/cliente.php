<html>
    <?php 
    
       require './backend.php';
        
        $bd=sqlite_open();
        if($_GET['id']!=null){
        $cons = $bd->query("SELECT * from usuarios where id=$_GET[id]");
        while($row=$cons->fetchArray()){
    ?>
    <head> EDITAR CLIENTE</head>
    <body>
 
         <form action="editar.php" method="post">
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
                     <a href="index.php?"><input type="button" value="Cancelar"/></a>
                    </td>
                   
                 </tr>
            </table>
             
        </form>
    </body>
   <?php }else{
           date_default_timezone_set('Europe/Paris');
        $fecha=getdate();
       ?>
         <body id="bodyAniadir">
 
        <h2 id = "titAniadir">A&ntilde;adir cliente</h2>
        <form id ="aniadirCliente" action="aniadir.php" method="post">
            <table>
                 <tr>
                     <td>Id:</td>
                     <td><input type="text" name="id" readonly="true" value="<?php echo getId();?>"/></td>
                 </tr>
                 <tr>
                     <td>Nombre:</td>
                     <td><input type="text" name="nombre"/></td>
                 </tr>
                 <tr>
                     <td>Apellidos:</td>
                     <td><input type="text" name="apellidos"/></td>
                 </tr>
                 <tr>
                     <td>Correo electronico:</td>
                     <td><input type="text" name="correoElectronico"/></td>
                 </tr>
                 <tr>
                     <td>Contrase&ntilde;a:</td>
                     <td><input type="text" name="contrasena"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de nacimiento:</td>
                     <td><input type="text" name="fechaNac"/></td>
                 </tr>
                 <tr>
                     <td>Fecha de registro:</td>
                     <td><input type="text" readonly="true" name="fechaReg" value="<?php echo $fecha['mday']."/".$fecha['mon']."/".$fecha['year'];?>"/></td>
                 </tr>
                 <tr>
                     <td>Valido:</td>
                     <td><input type="text" name="valido"/></td>
                 </tr>
            </table>
            
            <input id="enviarButton" type="submit" name="enviar" value="A&ntilde;adir cliente">
            <a href="index.php?"><input type="button"id="finalizarButton" value="Cancelar"/></a>
           
        </form>
      
    </body>  
           
           
           
           <?php
   }?>
    
</html>