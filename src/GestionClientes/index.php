
<!DOCTYPE html>
<!--
    Ejemplo comunicaci�n jQuery con JSON.
-->
<!--<html>
    <head>
        <title>jQuery PHP 1</title>
        <meta charset="ISO-8859-15">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        <script>
            
            $(document).ready(function() {
 
                $('#login-form').submit(function(event) {
                    var formData = {
                        'dato': $('input[name=nombre]').val()
                    };

                    // procesa el formulario
                    $.ajax({
                        type        : 'POST', // define el tipo de comunicaci�n HTTP
                        url         : 'backend.php', // url donde se har� la comunicaci�n (POST en este caso)
                        data        : formData, // Objeto con datos (tipo clave:valor)
                        dataType    : 'json' // Tipo de datos que se espera que vuelva del servidor
                    })
                    // using the done promise callback
                    .done(function(data) {
                        if (!data.success) {
                            process_login_result(data);
                        } else {
                            alert("Error");
                        }
                    })
                                
                    .fail(function(data) {
                        alert("Fail!!")
                    });
                                
           // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                });

            });    // Document ready
            function process_login_result(data) {
                for (var v in data) {
                    $("#main-menu").append(" "+data[v]+" ");
                }

            }
            
        </script>
        <div id="principal">
            <div id="contenedor">
                <div id="main">
                    <p>Introduce un nombre para realizar la busqueda:</p>
                    <form id="login-form" method="POST">
                        <input id="dato" name="nombre" type="text" size="20"/>
                        <input type="submit" value="Enviar">
                    </form>
                    <div id="main-menu"></div>
                </div>
            
        </div>
    </body>
</html>

<!-- probar-->
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
                                            <table>
						<?php
							MuestraUsuarioBusqueda();
                                                        
						?>
                                            </table>
					</div>
				</div>
			</center>
		</div>
	</body>
</html>
<!---->