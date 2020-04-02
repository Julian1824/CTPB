<?php

include("database/dbi.php");

if (isset($_POST['save_cuentas'])) {
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Cedula = $_POST['Cedula'];
  $username = $_POST['username'];
  $Telefono = $_POST['Telefono'];
  $password = $_POST['password'];
  $query = "INSERT INTO cuentas(Nombre, Apellido,Cedula,username,Telefono,password) 
  VALUES ('$Nombre', '$Apellido','$Cedula','$username','$Telefono','$password')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: RegistrarCuentas.php');

}

?>
