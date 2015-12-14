<html id="htmlAniadir">
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css" title="default">
    </head>
    <?php 
        include './backend.php';
        date_default_timezone_set('Europe/Paris');
        $fecha=getdate();
    ?>
    
    <body id="bodyAniadir">
 
        <h2 id = "titAniadir">A&ntilde;adir cliente</h2>
         <form id ="aniadirCliente" action="" method="post">
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
            <?php
                if($_POST['nombre']!=''){
                    $bd=sqlite_open();
                    
                }
            ?>
        </form>
      
    </body>

        
    
</html>