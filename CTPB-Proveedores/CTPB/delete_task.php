<?php

include("database/db.php");

if(isset($_GET['id_proveedor'])) {
  $id_proveedor = $_GET['id_proveedor'];
  $query = "DELETE FROM proveedores WHERE id_proveedor = $id_proveedor";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado Exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: Vis_proveedor.php');
}

?>
