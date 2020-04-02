<?php

include('database/db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $nombre_empresa = $_POST['nombre_empresa'];
  $direccion_empresa = $_POST['direccion_empresa'];
  $telefono_empresa = $_POST['telefono_empresa'];
  $query = "INSERT INTO proveedores(nombre, apellido,cedula,email,telefono,nombre_empresa,direccion_empresa,telefono_empresa) 
  VALUES ('$nombre', '$apellido','$cedula','$email','$telefono','$nombre_empresa','$direccion_empresa','$telefono_empresa')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: registro.php');

}

?>
