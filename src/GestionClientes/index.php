
<!DOCTYPE html>
<!--
    Ejemplo comunicaci�n jQuery con JSON.
-->
<?php include_once ("backend.php");?>

<html>
    <head>
        <title>usuarios</title>
        <meta charset="ISO-8859-15">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css" title="default"> 
    </head> 
    <body>
        <div class="total">
            <center>
		<div class="central_princ">
                    <div id="banner_princ">
			<?php muestraBanner();?>
                    </div>
                    <div id="centre_princ">
                        <form method="get">
                            <input type="text" id="nombre" name="nombre"/>
                            <input type="submit" value="buscar"/>
                            <table border="1">
                                <tr>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=id">id</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=nombre">Nombre</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=apellidos">apellidos</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=correoElectronico">correo elecronico</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=contrasena">contrase&ntilde;a</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=fechaNac">Fecha de nacimiento</a></td>
                                    <td><a href="index.php?nombre=<?php echo $_GET['nombre']?>&orden=fechaReg">Fecha de registro</a></td>
                                    <td colspan="2">acciones</td>
                                </tr>
                                <?php MuestraUsuarioBusqueda($_GET['nombre'],$_GET['orden']);?>
                            </table>
                        </form>
                        <input type="button" value="a&ntilde;adir usuario"/>
                    </div>
		</div>
            </center>
	</div>
    </body>
</html>
