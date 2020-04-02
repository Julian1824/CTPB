<?php
            include 'includes/header.php';
 ?>

    <body data-sidebar="dark">  
<?php
                    include 'includes/Sidebar.php';
            ?>
<?php 
	include_once 'database.php';
	
	if(isset($_POST['guardar'])){
		$cantidad=$_POST['cantidad'];
		$causa=$_POST['causa'];
		$numero_factura=$_POST['numero_factura'];
		$reposicion=$_POST['reposicion'];
		$valor_devolucion=$_POST['valor_devolucion'];

		if(!empty($cantidad) && !empty($causa) && !empty($numero_factura) && !empty($reposicion) && !empty($valor_devolucion) ){
			if(!filter_var($numero_factura,FILTER_VALIDATE_INT)){

				echo "<script> alert('Número no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO devolucion(cantidad,causa,numero_factura,reposicion,valor_devolucion) VALUES(:cantidad,:causa,:numero_factura,:reposicion,:valor_devolucion)');
				$consulta_insert->execute(array(
					':cantidad' =>$cantidad,
					':causa' =>$causa,
					':numero_factura' =>$numero_factura,
					':reposicion' =>$reposicion,
					':valor_devolucion' =>$valor_devolucion
				));
				header('Location: De_devolucion.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
<div class="main-content">
<div class="page-content">
<div class="card ">
	<meta charset="UTF-8">
	<title>Nueva Devolución</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <h2>DEVOLUCIONES</h2>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="cantidad" placeholder="Cantidad Devolució" class="input__text">
                    <input type="text" name="causa" placeholder="Causa Devolució" class="input__text">
                </div>
                <div class="form-group">
                    <input type="text" name="numero_factura" placeholder="Número Factura" class="input__text">
                    <input type="text" name="reposicion" placeholder="Reposición" class="input__text">
                </div>
                <div class="form-group">
                    <input type="text" name="valor_devolucion" placeholder="Valor Devolución" class="input__text">
                </div>
                <div class="btn__group">
                    <a href="Nu_devolucion.php" class="btn btn__danger">Cancelar</a>
                    <input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
                </div>
            </form>
        </thead>
    </table>
</body>
</html>