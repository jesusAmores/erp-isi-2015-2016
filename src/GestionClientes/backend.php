<?php
        // put your code here

    function sqlite_open(){
        $handle = new SQLite3('usuario.db');
        return $handle;
    } 
    function muestraBanner(){
?>
        <a href="">Gestion Usuarios</a>
<?php
    }

    function MuestraUsuarioBusqueda(){
        $bd=sqlite_open();
        $i=0;
	if($nombre==NULL){
		$cons=$bd->query("SELECT * FROM usuarios");
	}else{
		$cons=$bd->query("SELECT * from usuarios where usuarios.nombre like %$nombre% order by $orden");
                                echo"hola";

	}
	while($row=$cons->fetchArray()){
            if($i % 2==0)
		?><tr>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                        <td><?php echo $row[5];?></td>
                        <td><?php echo $row[6];?></td>
			<td><a href="borrar.php?id=<?echo $id;?>"><input type="button" value="borrar"></a></td>
			<td><a href="editar.php?id=<?echo $id;?>"><input type="button" value="editar"></a></td>
			<td></td>
		</tr><?php $i+=1;
	}
}
    
    //print json_encode($resp);
?>
