<?php 
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

include("conexion.php");

$proceso=$conexion->query("SELECT * FROM cuentas WHERE username = '$username' AND password ='$password' ");

if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['u_usuario'] = $username;
	header("Location: index2.php");
}else{
	header("Location: index.php");
	 echo "Nombre de usuario o contraseña incorrecto";
}
?>

