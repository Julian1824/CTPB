<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'ventas'
);
if(isset($conn)){
  echo 'db connected';
}

?>