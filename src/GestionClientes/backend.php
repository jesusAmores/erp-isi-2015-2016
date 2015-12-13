<?php
        // put your code here

    function sqlite_open(){
        $handle = new SQLite3('usuario.db');
        return $handle;
    } 
    function muestraBanner(){?>
        <a href="">Gestion Usuarios</a>
<?php }

    function MuestraUsuarioBusqueda($nombre,$orden){
        $bd=sqlite_open();
        $i=0;
        if($orden==NULL){
            $orden="nombre";
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
			<td><a href="usuario.php?id=<?php echo $row[0];?>"><input type="button" value="editar"></a></td>
			<td><a href="borrar.php?id=<?php echo $row[0];?>"><input type="button" value="borrar"></a></td>
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
                            <!--<form action="editar.php" action="POST">
                            <a href="editar.php?id=<?php //echo $row[0];?>"><input type="button" value="editar"></a>
                            <input type="hidden" name="id" value="<?php //echo $row[0]; ?>"/>
                            <input type="submit" value="aceptar"/>
                        </form>-->
                            <a href="usuario.php?id=<?php echo $row[0];?>"><input type="button" value="editar"></a>
                        </td>
                        <td><a href="borrar.php?id=<?php echo $row[0];?>"><input type="button" value="borrar"></a></td>
			
                </tr>
            <?php }
            $i+=1;
	}
}
function borrarUsuario($id){
    echo $id;
    $bd=sqlite_open();
    $bd->query("DELETE FROM usuarios WHERE id=$id");
}
?>
