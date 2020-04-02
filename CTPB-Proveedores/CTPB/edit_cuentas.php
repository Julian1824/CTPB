<?php 

include("database/dbi.php");



if  (isset($_GET['ID_cuentas'])) {
  $ID_cuentas= $_GET['ID_cuentas'];
  $query = "SELECT * FROM cuentas WHERE 	ID_cuentas=$ID_cuentas ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    $Cedula = $row['Cedula'];
    $username = $row['username'];
    $Telefono = $row['Telefono'];
    $password = $row['password'];
    
  }
}

if (isset($_POST['update'])) {
  $ID_cuentas  = $_GET['ID_cuentas'];
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Cedula = $_POST['Cedula'];
  $username = $_POST['username'];
  $Telefono = $_POST['Telefono'];
  $password = $_POST['password'];


  $query = "UPDATE cuentas set Nombre = '$Nombre', Apellido  = '$Apellido',Cedula= '$Cedula',username= '$username',Telefono= '$Telefono', password ='$password' WHERE ID_cuentas =$ID_cuentas";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'La nota se actualizo correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: VisCuentas.php');
}

?>
<?php include('includes/header.php'); ?>

<body data-sidebar="dark">

<!-- Begin page -->


    <!-- ========== Left Sidebar Start ========== -->
 
<?php
            include 'includes/Sidebar.php';
    ?>

<div class="container borde w-25 pt-5 " style="height: 800px;">

<form action="edit_cuentas.php?ID_cuentas=<?php echo $_GET['ID_cuentas']; ?>" method="POST">
                                
                                <div class="form-group"> 
                             <br>
                  <label for="exampleInputEmail1 ">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="Nombre" value="<?php echo $Nombre; ?>" aria-describedby="emailHelp" placeholder="Nombre" required>
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="Apellido" value="<?php echo $Apellido; ?>" aria-describedby="emailHelp" placeholder="Apellido" required>
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Cedula</label>
                  <input type="text" type="date" class="form-control" name="Cedula" id="exampleInputEmail1" value="<?php echo $Cedula; ?>" aria-describedby="emailHelp" placeholder="cedula" required>
                  <br>
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" type="date" class="form-control" name="username" id="exampleInputEmail1" value="<?php echo $username; ?>" aria-describedby="emailHelp" placeholder="Email" required>
                  <br>
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="text" type="date" class="form-control"  name="Telefono" id="exampleInputEmail1"  value="<?php echo $Telefono; ?>" aria-describedby="emailHelp" placeholder="telefono" required>  
                  <br>
                  <label for="exampleInputEmail1">Contraseña</label>
                     <input type="password" class="form-control" id="pass1" name="password" aria-describedby="emailHelp"  value="<?php echo $password; ?>" placeholder="Contraseña" required>
                     <div id="error1"></div>
                <br>
                <label for="exampleInputEmail1">Contraseña</label>
                     <input type="password" class="form-control" id="pass2" name="password" aria-describedby="emailHelp" value="<?php echo $password; ?>"  placeholder="Contraseña" required>
          
		        <div id="error2"></div>
                <br>
			
                  <br>
                  <br>
<button class="btn btn-success btn-block" name="update">
          Actualizar
</button>
</form>
                      
</div>
     </div>

                

<?php include('includes/footer.php'); ?>
