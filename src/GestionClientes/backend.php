<?php
        // put your code here

    function sqlite_open(){
        $handle = new SQLite3('cliente.db');
        return $handle;
    } 
    function muestraBanner(){?>
        <a href="">Gestion Usuarios</a>
<?php }

    function MuestraUsuarioBusqueda($nombre,$orden){
        $bd=sqlite_open();
        $i=0;
        if($orden==NULL){
            $orden="id";
        }
	if ($nombre == NULL) {
                $cons = $bd->query("SELECT * FROM usuarios order by $orden");

        } else {
            $cons = $bd->query("SELECT * from usuarios where nombre like '%$nombre%' or apellidos like '%$nombre%' order by $orden");
        }

            while($row=$cons->fetchArray()){
            if($i%2==0){
		?><tr id="FilaImpar">
                        <td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                        <td><?php echo $row[5];?></td>
                        <td><?php echo $row[6];?></td>
                        <td><a href="editarCliente.php?id=<?php echo $row[0];?>"><input type="button" value="editar"></a></td>
			<td><a href="borrar.php?id=<?php echo $row[0];?>"><input type="button" value="borrar" name="borrar"></a></td>
			<td></td>
            </tr>
      <?php }else{?>
                <tr>
                        <td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                        <td><?php echo $row[5];?></td>
                        <td><?php echo $row[6];?></td>
                        <td>
                            <a href="editarCliente.php?id=<?php echo $row[0];?>"><input type="button" value="editar"></a>
                        </td>
                        <td><a href="borrar.php?id=<?phpecho $row[0];?>"><input type="button" value="borrar" name="borrar"></a></td>
			
                </tr>
            <?php }
            $i+=1;
	}
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

function insertaCliente(){
    $bd=sqlite_open();
    $bd->query("INSERT INTO usuarios(nombre,apellidos,correoElectronico,contrasena,fechaNac,fechaReg,valido) VALUES('{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['correoElectronico']}','{$_POST['contrasena']}','{$_POST['fechaNac']}','{$_POST['fechaReg']}','{$_POST['valido']}')");

}
function editarCliente($nombre,$apellidos,$correo,$pass,$fechaNac,$fechaReg,$valido,$id){
    $bd=sqlite_open();
    $bd->query("UPDATE usuarios "
                            . "SET nombre='{$nombre}',"
                            . "apellidos='{$apellidos}', "
                            . "correoElectronico='{$correo}', "
                            . "contrasena='{$pass}',"
                            . "fechaNac='{$fechaNac}',"
                            . "fechaReg='{$fechaReg}',"
                            . "valido='{$valido}'"
                            . "WHERE id=".$id);
                    //header("location:index.php");
}
?>
