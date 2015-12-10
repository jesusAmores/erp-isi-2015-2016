<?php
/**
 * Ejemplo sencillo para extender la clase SQLite3 y cambiar los parámetros
 * de __construct, después usar el método open para inicializar la BD.
 * 
 * https://secure.php.net/manual/es/sqlite3.open.php
 * 
 */
class BD extends SQLite3
{
    function __construct() {
        $this->open('usuario.db');
    }
    
    function lista_usuarios($campo,$nombre) {
        if($campo)
            if($nombre)
                return $this->query('SELECT * FROM usuarios WHERE nombre like %$nombre% ORDER BY $campo');
        return $this->query('SELECT * FROM usuarios');
    }


/*
function nuevoUsuario($nombre,$apellidos,$contra,$fecha_reg,$fecha_nac,$sexo,$mail,$pai){
	if($_POST['acepta_registro']){
		$verd=0;
		if($_POST['nombre_registro']){
			$nombre=quitar($_POST['nombre_registro']);
			$verd=1;
		}
		else{
			?>
			<font color="red">Ponga un nombre de minimo 3 caracteres</font>
			<?
			$verd=0;
		}
		if($_POST['apellido_registro']){
			$apellidos=quitar($_POST['apellido_registro']);
			$verd=1;
		}else{
			?>
			<font color="red">Ponga sus apellidos</font>
			<?
			$verd=0;	
		}
		if($_POST['anio_nac_reg']!=-1&&$_POST['mes_nac_reg']!=-1&&$_POST['dia_nac_reg']!=-1){
			$fecha_nac=quitar($_POST['anio_nac_reg']."-".$_POST['mes_nac_reg']."-".$_POST['dia_nac_reg']);
			$verd=1;
		}else{
			?>
			<font color="red">Ponga su fecha de nacimiento</font>
			<?
			$verd=0;
		}
		if($_POST['sexo']!=-1){
			$sexo=quitar($_POST['sexo']);
			$verd=1;
		}else{
			?>
			<font color="red">Seleccione si es hombre o mujer</font>
			<?
			$verd=0;
		}
		if($_POST['email_registro']){
			$verd=1;
			$mail=quitar($_POST['email_registro']);
		}else{
			$verd=0;
			?>
			<font color="red">Ponga un email valido</font>
			<?
			
		}
		if($_POST['pais']!=-1){
			$pai=quitar($_POST['pais']);
			$verd=1;
		}else{
			?>
			<font color="red">seleccione un pais</font>
			<?
			$verd=0;
		}
		if($_POST['pass_registro']){
			$contra=md5(sha1(quitar($_POST['pass_registro'])));
			$verd=1;
		}else{
			?>
			<font color="red">Ponga una contraseña</font>
			<?
			$verd=0;
		}
			$fecha_reg=quitar(date(y-m-d));
			mt_srand(time());
			$alea=mt_rand(0,10000000000);
			$alea=$alea/10000000000;
		$con = mysql_query("select id,pass from usuarios where email='$mail'") ;
		$datos = mysql_fetch_assoc($con) ;
		if(mysql_num_rows($con)||$verd==0) {
			?><font color="red">el correo ya existe, si ha olvidado su contrase&ntilde;a de a recordar contrase&ntilde;a</font><?

			}else{
				mysql_query("insert into usuarios(email,nombre,apellido,pass,fecha_reg,fecha_nac,sexo,pais,ip,valido) values ('$mail','$nombre','$apellidos','$contra',CURDATE(),'$fecha_nac','$sexo','$pai','$_SERVER[REMOTE_ADDR]','$alea')");
				?><font color="red">Revise su correo electronico para activar su cuenta.</font><?
				ValidaUsuario($alea,$mail);
		}
	}
}

*/
function ModificaUsuario(){/*SIN EMPEZAR*/
	
}

function BorraUsuario(){/*SIM EMPEZAR*/
	
}
/*
function MuestraUsuarioBusqueda($nombre,$orden){
	if($nombre==NULL){
		$cons=mysql_query("select * from music order by $orden");
	}else{
		$cons=mysql_query("SELECT * from USUARIO where USUARIO.nombre like %$nombre% order by $orden");
	}
	while($row=mysql_fetch_array($cons)){
		?><tr>
			<td><?echo $row[nombre];?></td>
			<td><?echo $row[apellidos]?></td>
			<td><a href="borrar.php?id=<?echo $id;?>"><input type="button" value="borrar"></a></td>
			<td><a href="editar.php?id=<?echo $id;?>"><input type="button" value="editar"></a></td>
			<td></td>
		</tr><?php
	}
}*/ 
}
?>