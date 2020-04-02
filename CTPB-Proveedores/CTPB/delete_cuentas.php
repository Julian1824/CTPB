<?php

include("database/dbi.php");

if(isset($_GET['ID_cuentas'])) {
  $ID_cuentas = $_GET['ID_cuentas'];
  $query = "DELETE FROM cuentas WHERE ID_cuentas = $ID_cuentas";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado Exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: VisCuentas.php');
}

?>
