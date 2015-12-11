
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
                            <input type="submit" value="buscar"></input>
                        </form>
                        <table>
                            <?php MuestraUsuarioBusqueda();?>
                        </table>
                        <input type="button" value="a&ntilde;adir usuario"/>
                    </div>
		</div>
            </center>
	</div>
    </body>
</html>
