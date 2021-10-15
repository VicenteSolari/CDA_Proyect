<?php
	include 'db_connect.php';
	$sql = "SELECT * FROM productos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td align="center"><?= $row['id']; ?></td>
			<td><?= $row['tipo_producto'] .' ' . $row['nombre']; ?></td>
			<td><?= $row['descripcion']; ?></td>
			<td><?= '$' . $row['precio']; ?></td>
            <td>
                <button type="button" 
					class="btn btn-success" 
					id="btnEditarProducto" 
					value="<?=  $row['id']; ?>" 
					data-type="<?=  $row['tipo_producto']; ?>" 
					data-name="<?=  $row['nombre']; ?>" 
					data-description="<?=  $row['descripcion']; ?>" 
					data-price="<?=  $row['precio']; ?>"
					data-toggle="modal" data-target="#editProduct"
					>Editar
				</button>
                <button type="button" class="btn btn-danger" id="btnEliminar" value="<?=  $row['id']; ?>">Eliminar</button>
            </td>
		</tr>
<?php	
	}
	}
	else {
		?>	
		<tr>
			<td align="center" colspan="100%">No hay productos disponible para mostrar.</td>
		</tr>
<?php	
	}
	mysqli_close($conn);
?>