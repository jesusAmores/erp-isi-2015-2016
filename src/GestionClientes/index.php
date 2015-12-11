
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
                        <form>
                            <input type=""/>
                            <input type="submit" value="buscar" name="aceptar" onClick=""></input>
                            <table border="1">
                                <tr>
                                <td><a href="">Nombre</a></td>
                                    <td>apellidos</td>
                                    <td>correo elecronico</td>
                                    <td>contrase&ntilde;a</td>
                                    <td>Fecha de nacimiento</td>
                                    <td>Fecha de registro</td>
                                    <td colspan="2">acciones</td>
                                </tr>
                                <?php MuestraUsuarioBusqueda();?>
                            </table>
                        </form>
                        <input type="button" value="a&ntilde;adir usuario"/>
                    </div>
		</div>
            </center>
	</div>
    </body>
</html>
