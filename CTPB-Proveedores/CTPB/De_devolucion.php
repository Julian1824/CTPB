<!doctype html>
<html lang="en">

<?php
            include 'includes/header.php';
 ?>

    <body data-sidebar="dark">

        <!-- Begin page -->
            <!-- ========== Left Sidebar Start ========== -->
         
<?php
                    include 'includes/Sidebar.php';
            ?>

<div class="main-content">
<div class="page-content">
<div class="card ">
<?php
	include_once 'database.php';

	$sentencia_select=$con->prepare('SELECT *FROM devolucion ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM devolucion WHERE id LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<body>
	<div class="contenedor">
		<h2>DEVOLUCIÓN</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar ID" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="Nu_devolucion.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table class="table table-bordered">
			<tr class="head">
				<td>Id Devolución</td>
				<td>Cantidad Devolución</td>
				<td>Causa Devolución</td>
				<td>Número Factura</td>
				<td>Reposición</td>
				<td>Valor Devolución</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['cantidad']; ?></td>
					<td><?php echo $fila['causa']; ?></td>
					<td><?php echo $fila['numero_factura']; ?></td>
					<td><?php echo $fila['reposicion']; ?></td>
					<td><?php echo $fila['valor_devolucion']; ?></td>
					<td><a href="editar_Devolucion.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>
